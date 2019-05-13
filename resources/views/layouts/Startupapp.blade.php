<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <base href="{{URL::asset('/')}}" target="">
        <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{url('css/test.css')}}">
        <script src="{{url('js/jquery-3.4.0.min.js')}}"></script>
    </head>
    <body>
        @include('inc.Startupnavbar')
        <div id="app"  style="padding-top:75px; padding-bottom:25px">
            @include('inc.messages')
            @yield('content')
        </div>
        <!-- Text Editor -->
        <script src="{{ asset('/vendor/unisharp/laravel-ckeditor/ckeditor.js')}}"></script>
        <script>
            CKEDITOR.replace( 'article-ckeditor' );
        </script>
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="{{url('js/popper.min.js')}}"></script>
        <script src="{{url('js/bootstrap.min.js')}}"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    </body>
</html>
