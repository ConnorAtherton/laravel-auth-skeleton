<!doctype html>
<html>
<head>
    <title>Basic Authentication skeleton</title>
    {{ HTML::style('/css/style.css') }}
</head>
<body>
    <div id="container">
        <div id="nav">
            <ul>
                <li>{{ HTML::linkRoute('home', 'Home') }}</li>
                @if(Auth::check())
                    <li>{{ HTML::linkRoute('profile', 'Profile' ) }}</li>
                    <li>{{ HTML::linkRoute('logout', 'Logout') }}</li>
                @else
                    <li>{{ HTML::linkRoute('login', 'Login') }}</li>
                @endif
            </ul>
        </div><!-- end nav -->

        <!-- check for flash notification message -->
        {{ View::make('shared._notifications') }}

        @yield('content')
    </div><!-- end container -->

    {{-- Scripts for the entire app should be placed here--}}
    {{ HTML::script('http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js') }}
    {{ HTML::script('js/app.js') }}

</body>
</html>
