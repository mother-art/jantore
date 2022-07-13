<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>{{ env('app_name') }}</title>
    <!-- Styles -->
    <link href="{{ asset('/assets/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/css/index.css') }}" rel="stylesheet">
    <script src="{{ asset('/assets/js/app.js') }}"></script>
</head>
<body>
<div class="title">雀とれ！</div>
<div class="menu">
    <div class="item"></div>
</body>
</html>