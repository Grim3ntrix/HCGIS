<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Holy Cross Garden Information System</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="shortcut icon" href="{{asset('frontend/assets/images/favicon.png')}}" />
        <!-- Styles -->
<style>
    body {
        font-size: 1rem;
        font-family: 'figtree', sans-serif;
        background-color: #070d19;
    }
    .row{
        background-color: #070d19;
        text-align: right;
        padding: 15px;
        
    }
    .auth{
        background-color: #000;
        color: #fff;
        padding: 10px;
        text-decoration: none;
        margin-right: 10px;
        background-color: green;
        }
        h1{
            color: #fff;
        }
</style>
    </head>
    <body class="antialiased">
        <div class="container">
            @if (Route::has('login'))
                <div class="row">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="auth">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="auth">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="auth">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
        <h1>This will be the welcome page for guest!</h1>

    </body>
</html>
