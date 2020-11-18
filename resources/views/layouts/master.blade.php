<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    @include('layouts.header')
    @yield('css')
</head>
<body>
        <div class="wrapper">
            <!-- Sidebar Holder -->
            @include('layouts.sidebar')

            <!-- Page Content Holder -->
            <div id="content">

                @include('layouts.navbar')
                
                <nav aria-label="breadcrumb">
                    @yield('breadcrumb')
                </nav>
                
                <div class="container-fluid">
                    <div class="row">
                        <div class="card cd-bg col-12">
                            <div class="card-body">
                                @yield('content')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        @include('layouts.scripts')
        @yield('js')
    </body>

</html>