<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-site-verification" content="eSR7FUifzWKzRxHD1jky9AmlXbU4DUAv9mj02MuDWMg" />
    <meta property="og:title" content="{{ env('APP_NAME') }} " />
    <meta property="og:description" content="{{ env('APP_DESCRIPTION') }}" />
    <meta property="og:image" content="{{ env('APP_URL') }}/thumbnail.jpg" />
    <title>{{ env('APP_NAME') }} | {{ $web['page'] }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/self.css'])
    <script src="https://unpkg.com/feather-icons"></script>
</head>

<body>
