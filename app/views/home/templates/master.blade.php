<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        @include('home.templates.header')
    </head>
    <body>
        @include('home.templates.nav')
        @yield('body')
        @include('home.templates.footer')

        <script src="{{url('/')}}/js/jquery-1.11.3.min.js"></script>
        <script src="{{url('/')}}/js/bootstrap.min.js"></script>

        <!-- PHP to JS Variables -->
        <script>
            domainURL = "{{url('/')}}";
        </script>
        <script src="{{url('/')}}/js/master.min.js"></script>

        @yield('footercode')
    </body>
    
</html>