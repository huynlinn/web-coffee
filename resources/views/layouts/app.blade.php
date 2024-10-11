<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Các thẻ <link>, <meta> khác -->
</head>
<body>
    <!-- Include header -->
    @include('partials.header')

    <!-- Phần nội dung chính -->
    <div class="content">
        @yield('content')
    </div>

    <!-- Include footer -->
    @include('partials.footer')

    <!-- Các thẻ <script> -->
</body>
</html>
