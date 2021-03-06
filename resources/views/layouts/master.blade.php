<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    @include('layouts.head')
    
    @yield('css')
    @stack('custom-css')
    
</head>
<body>
    <div class="wrapper active">
        @include('layouts.sidebar')
        <div id="content">
            @include('layouts.navbar')
            <div class="container-fluid pb-4">
                <div class="row">
                    <div class="col-12">
                        <nav aria-label="breadcrumb">
                            @yield('breadcrumb')
                        </nav>
                    </div>
                </div>
                @yield('content')
            </div>
        </div>
    </div>
        
    @yield('modals')
    @stack('modal')
    
    @yield('templates')
    @stack('template')
    
    @include('layouts.scripts')
    @yield('js')
    @stack('custom-js')
</body>
</html>