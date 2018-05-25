<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Lara-Vue</title>
        
        <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content" id="app">
                <example-component></example-component>
            </div>
        </div>
        <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
    </body>
</html>
