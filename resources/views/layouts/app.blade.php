<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your App Title</title>
    <!-- Include your CSS stylesheets and JS scripts here -->
</head>
<body>
    <nav>
        <!-- Your navigation menu goes here -->
    </nav>

    <main>
        @yield('content') <!-- This will be replaced by content from other views -->
    </main>

    <footer>
        <!-- Your footer content goes here -->
    </footer>
    <!-- Include your JS scripts here if needed -->
</body>
</html>
