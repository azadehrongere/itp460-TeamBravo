<!DOCTYPE html>
<html>
    <head>
        <title>Incubate - @yield('title')</title>
        @include('includes.links')
    </head>
    <body>
        @section('navigation')
            @includeIf('includes.nav')
            
        @show

        <div>
            @yield('content')
        </div>

        @include('includes.footer')
    </body>
</html>