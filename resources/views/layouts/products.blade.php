


    @if ($product_id == 1)
            @section('products')
            @show

    <div class="row">
        <div class="col"><x-image/></div>
        <div class="col-4">
            <br> <br>
            <x-description/>
        </div>
    </div>

    <div class="align-self-center"><x-particles/></div>


    @elseif ($product_id == 2)
        <div>
            <html>
            <head>
            </head>
            <body>
            @section('products')
                Product2
            @show
            <div class="container">
                @yield('content')
                asdasdas
            </div>
            </body>
            </html>
        </div>




    @elseif ($product_id == 3)
        <div>
            <html>
            <head>

            </head>
            <body>
            @section('products')
                Product3
            @show

            <div class="container">
                @yield('content')
                asdasdas
            </div>
            </body>
            </html>
        </div>




    @elseif ($product_id == 4)
        <div>
            <html>
            <head>

            </head>
            <body>
            @section('products')
                Product4
            @show

            <div class="container">
                @yield('content')

            </div>
            </body>
            </html>
        </div>

    @endif






