<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->

    </head>
    <body class="antialiased">
        <h1>Test</h1>

        <form action="{{route('sendMail')}}" method="POST">
            <label>Name</label>
            @csrf
            <input type="text" name="sender">
            <label>Email</label>
            @csrf
            <input type="email" name="email">
            <label>Subject</label>
            @csrf
            <input type="text" name="subject">
            <label>Message</label>
            @csrf
            <input type="text" name="message">
            <button type="submit">Send</button>
        </form>
    </body>
</html>
