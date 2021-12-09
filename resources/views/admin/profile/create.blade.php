!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible"content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta nmae="csrf-token" content="{{ csrf_token()}}">
        <title>@section('title')</title>
        <script src="{{ secure_asset('js/app.js') }}"defer></script>
        <link rel="dns-prefetch"href="http://fonts.gstatic.com">
        <link href="http://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet"type="text/css">
        <link href="{{ secure_asset('css/app.css') }}"rel="stylesheet">
        <link href="{{ secure_asset('css/profile.css') }}"rel="stylesheet">
    </head>
    <body>
        <div id="app">
            <nav class="navbar navbar-expand-md navbar-dark navbar-laravel">
                @section('content')
                <div class="container">
                    <div class="row">
                        <div class="container">
                           <div class="col-md-8 mx-auto">
                                <h2>My プロフィール</h2>
           <a class="navbar-brand href="{{url('/') }}">
                    </a>
                    <button class="navbar-toggler"type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-
                    controls="navbarSupportedContent" aria-expanded="false"aria-label="Toggle nabigation">
                    <span class="navbar-toggler-icon">
                    </span>
                    </button>
                    <div class="collapse navbar-collapse"id="navbarSupportedContent">
                        <ul ckass="navbar-nav mr-auto">
                        </ul>
                        <ul class="navbar-nav ml-auto">
                        </ul>
                    </div>
                            </div>
                        </div>
                    </div>
                </div>    
            </nav>
            <main class="py-4">
                @yield('content')
                @section('title', 'プロフィールページ')
            </main>
        </div>
    </body>
</html>