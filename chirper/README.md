# Blog App

## Overview
This project is a blog platform built using Laravel, Chirper, and Laravel Breeze. It provides functionalities for user registration, posting and commenting.

## Technologies and Frameworks Used
1. **Backend Framework**: Laravel
2. **Authentication**: Laravel Breeze
3. **Frontend**: Blade Template Engine, Bootstrap (for responsive design)
4. **Database**: MySQL or SQLite (depending on hosting environment)
5. **Email Services**: SMTP server or Laravel's default email services for local development

## Usage Guide

### User Registration
1. Navigate to the registration page by clicking the "Register" button on the front page.
2. Fill in the required details and submit the form. (make sure to enter valid details)
3. further more porceed to log in.

### Creating a blog
1. Log in to your account.
2. Click on "blog" in the navigation bar or check out the latest blogs.
3. Fill in the title and body of your blog.
4. Submit the form to publish your blog.

### Commenting on a Post
1. View comments related to posts by clicking on the comments in the navigation.
2. Fill in your comment and submit the form by clicking on "comment"
3. You can view and edit your comments below the comment form.
4. To edit your comment click on the three dots in the right side of you comment form, click "edit" and once you done editing you can click "save". 

### Installation

1. **Create a new Laravel project:**
    
    laravel new blog-app
    cd blog-app
   

2. **Serve the application:**
    
    php artisan serve
    

3. **Create a new model:**
   
    php artisan make:model


4. **Install Laravel Breeze:**
    
    composer require laravel/breeze --dev
    

5. **Install Breeze with Blade templates:**
    
    php artisan breeze:install blade
    

6. **Install Node.js dependencies:**
    
    npm install
   

7. **Compile front-end assets:**
    
    npm run dev
   

8. **Set up environment variables:**
    Copy the `.env.example` file to `.env` and update the necessary environment variables, especially the database settings.
    

9. **Run database migrations :**
    php artisan migrate 
    

10. **Serve the application again:**
    php artisan serve
    Visit `http://127.0.0.1:8000` in your browser.

11. **Customize code using VisualStudioCode**
    code .
 Opens up the project file in visual studio code, allows for customization.

### Adding Blogs and Docstrings
<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::all();
        return view('blogs.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        $blog = new Blog([
            'user_id' => auth()->id(),
            'title' => $request->title,
            'content' => $request->content,
        ]);

        $blog->save();

        return redirect()->route('blogs.index')->with('success', 'Blog created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        return view('blogs.show', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        return view('blogs.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        $blog->update([
            'title' => $request->title,
            'content' => $request->content,
        ]);

        return redirect()->route('blogs.index')->with('success', 'Blog updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();

        return redirect()->route('blogs.index')->with('success', 'Blog deleted successfully.');
    }


    
}
### Adding comments and Docstrings
<?php

namespace App\Http\Controllers;

use App\Models\Chirp;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Gate;
use Illuminate\View\View;

class ChirpController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('chirps.index', [
            'chirps' => Chirp::with('user')->latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'message' => 'required|string|max:255',
        ]);
 
        $request->user()->chirps()->create($validated);
 
        return redirect(route('chirps.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Chirp $chirp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Chirp $chirp): View
    {
        Gate::authorize('update', $chirp);
 
        return view('chirps.edit', [
            'chirp' => $chirp,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Chirp $chirp): RedirectResponse
    {
        Gate::authorize('update', $chirp);
 
        $validated = $request->validate([
            'message' => 'required|string|max:255',
        ]);
 
        $chirp->update($validated);
 
        return redirect(route('chirps.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Chirp $chirp): RedirectResponse
    {
        Gate::authorize('delete', $chirp);
 
        $chirp->delete();
 
        return redirect(route('chirps.index'));
    }
}
## Database Schema

#### Tables and Fields

1. **Users**
    - `id`: Primary key, auto-increment.
    - `name`: String, required.
    - `email`: String, required, unique.
    - `email_verified_at`: Timestamp, nullable.
    - `password`: String, required.
    - `remember_token`: String, nullable.
    - `created_at`: Timestamp.
    - `updated_at`: Timestamp.

2. **Password Reset Tokens**
    - `email`: Primary key, string.
    - `token`: String, required.
    - `created_at`: Timestamp, nullable.

3. **Sessions**
    - `id`: Primary key, string.
    - `user_id`: Foreign key, references `users.id`, nullable, indexed.
    - `ip_address`: String (max length 45), nullable.
    - `user_agent`: Text, nullable.
    - `payload`: Long text, required.
    - `last_activity`: Integer, indexed.

4. **Blogs**
    - `id`: Primary key, auto-increment.
    - `user_id`: Foreign key, references `users.id`, cascade on delete.
    - `title`: String, required.
    - `content`: Text, required.
    - `created_at`: Timestamp.
    - `updated_at`: Timestamp.

5. **Chirps**
    - `id`: Primary key, auto-increment.
    - `user_id`: Foreign key, references `users.id`, cascade on delete.
    - `message`: String, required.
    - `created_at`: Timestamp.
    - `updated_at`: Timestamp.