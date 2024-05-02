<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to My Laravel App</title>
</head>
<body>
    <header>
        <h1>Welcome to My Laravel App</h1>
    </header>
    <nav>
        <ul>
            <li><a href="{{ route('home') }}">Home</a></li>
            <!-- Add more navigation links as needed -->
        </ul>
    </nav>
    <main>
        <p>This is the content of your home page.</p>
    </main>
    <footer>
        <p>&copy; {{ date('Y') }} Your Laravel App Name. All rights reserved.</p>
    </footer>
</body>
</html>
