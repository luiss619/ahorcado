<!DOCTYPE html>
<html lang="es">
    <head>
        @include('layouts.shared/head-css')    
    </head>
    <body class="loading_">
        <div id="wrapper">
            @include('layouts.shared/topbar')    
            <div class="content-page">
                <div class="content">
                    @yield('content')
                </div>  
            </div>    
        </div>          
        @include('layouts.shared/footer-script')   
        @yield('scripts') 
    </body>
</html>