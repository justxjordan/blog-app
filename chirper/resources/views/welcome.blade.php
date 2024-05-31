<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TideTales Blogging Platform</title>
    <style>
        /* Reset some default styles */
        body, h1, h2, p {
            margin: 0;
            padding: 0;
            
        }


        /* Global styles */
        body {
            font-family: Arial, sans-serif;
            background-image: url('backgroundforwelcome.jpg');
            background-size: cover; 
            background-repeat: no-repeat; 
            background-position: center; 
            color: #333;
            line-height: 1.6;
        }

        
        .container {
    max-width: 800px;
    margin-left: auto;
    margin-right: 150px;
    margin-top: 140px;
    padding: 0 20px;
}

        /* Header styles */
        header {
            text-align: center;
            padding: 20px 0;
        }

        h1 {
            font-size: 2.5rem;
            font-weight: bold;
            color: #333;
            text-decoration: underline;
        }

        /* Navigation styles */
        nav {
            padding: 10px;
            margin-left: 280px;
        }

        nav a {
            color: #fff; /* White text color */
            text-decoration: none;
            background-color: #0F49B9; /* Blue background color */
            padding: 10px 30px; /* Padding around the text */
            border-radius: 10px; /* Rounded corners */
            margin: 5px; 
            display: inline-block; 
            
            
        }

        nav a:hover {
            text-decoration: underline;
        }

        /* Main content styles */
        main {
            padding: 20px 0;
        }

        section {
            margin-bottom: 20px;
        }

        h2 {
            font-size: 1.5rem;
            text-align: center;
            font-weight: bold;
            color: #333;
            text-decoration: underline;
            padding: 20px 0;
        }

        p {
            font-size: 1rem;
            color: #666;
            width: 100%;
            max-width: 550px;
            margin: 0 auto;
        }

       
    
    </style>
</head>
<body>

    <div class="container">
        <header>
            <h1>Welcome to TideTales</h1>
        </header>

        <main>
            <section>
                <p>Your go-to blog platform where new web developers come together to share tips, tricks, and experiences. Whether you're just starting out or looking to enhance your skills, TideTales is the perfect place to learn, grow, and connect with fellow developers.</p>
            </section>

            <section>
                <h2>Ready to ride the wave of web development?</h2>
            </section>
            <nav>
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>
            </nav>
        </main>

    </div>
</body>
</html>