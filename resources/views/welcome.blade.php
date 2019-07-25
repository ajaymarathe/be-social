<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Be Social</title>     
        <link rel="stylesheet" href="{{ asset('css/material-dashboard.css') }}">
        <link rel="stylesheet" href="{{ asset('css/common.css') }}">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    </head>
    <body>
       <div id="app">
            <app-home></app-home>
       </div>
       <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
