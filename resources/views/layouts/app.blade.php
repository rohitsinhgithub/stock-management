<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <h1>Stock Management System</h1>
        <nav>
            <a href="{{ route('products.index') }}">Home</a>
            <a href="{{ route('products.create') }}">Add Product</a>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        <p>&copy; {{ date('Y') }} Stock Management System</p>
    </footer>
</body>
</html>