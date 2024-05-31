<x-app-layout>
<div class="bg-cover bg-center h-screen" style="background-image: url('5517137.jpg');">
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
    <h1 class="text-xl font-semibold mb-4 text-white text-center">{{ __('Latest TideTale Blogs') }}</h1>


       
        @foreach ($blogs as $blog)
            <div class="mb-4 p-4 bg-white shadow rounded-lg">
                <h2 class="text-lg font-semibold">{{ $blog->title }}</h2>
                <p class="mt-2 text-gray-600">{{ Str::limit($blog->content, 100) }}</p>
                <a href="{{ route('blogs.show', $blog) }}" class="text-indigo-500 hover:text-indigo-700">{{ __('Read more') }}</a>
            </div>
        @endforeach

        <div class="mb-4 flex justify-center">
    <a href="{{ route('blogs.create') }}" class="inline-block bg-white hover:bg-blue-800 text-black font-bold py-2 px-4 rounded">{{ __('Create Blog') }}</a>
</div>


    </div>
</x-app-layout>
