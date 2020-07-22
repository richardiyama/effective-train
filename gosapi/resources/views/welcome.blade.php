<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                        <a href="{{ url('/breadcrumps') }}">Breadcrump</a>
                        <a href="{{ url('/columnsthrees') }}">Column three</a>
                        <a href="{{ url('/columnstwos') }}">Column two</a>
                        <a href="{{ url('/contacttopareas') }}">Contact Top Area</a>
                        <a href="{{ url('/contactuss') }}">Contact Us</a>
                        <a href="{{ url('/counterareas') }}">Counter Area</a>
                        <a href="{{ url('/counterups') }}">Counter Up</a>
                        <a href="{{ url('/findinguss') }}">Finding Us</a>
                        <a href="{{ url('/footers') }}">Footer</a>
                        <a href="{{ url('/innerabouts') }}">Inner About</a>
                        <a href="{{ url('/headers') }}">Header</a>
                        <a href="{{ url('/homess') }}">Home Page</a>
                        <a href="{{ url('/mapareas') }}">Map Area</a>
                        <a href="{{ url('/nameitems') }}">Name Item</a>
                        <a href="{{ url('/nameitemtwos') }}">Name Item Two</a>
                        <a href="{{ url('/originalservices') }}">Original Services</a>
                        <a href="{{ url('/posts') }}">Posts</a>
                        <a href="{{ url('/serviceareas') }}">Service Areas</a>
                        <a href="{{ url('/servicedetailss') }}">Service Details</a>
                        <a href="{{ url('/coursefiles') }}">Course File</a>

                        
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Global Outsourcing Services Limited API
                </div>

                <div class="links">
                <a href="{{ url('/abouts') }}">About</a>
                        <a href="{{ url('/aboutcounterareas') }}">About Counter Areas</a>
                        <a href="{{ url('/aboutones') }}">About One</a>
                        <a href="{{ url('/abouttwos') }}">About Two</a>
                        <a href="{{ url('/accordions') }}">Accordion </a>
                        <a href="{{ url('/abouts') }}">About</a>
                        <a href="{{ url('/blogareas') }}">Blog Area </a>
                        <a href="{{ url('/brands') }}">Brand</a>
                        <a href="{{ url('/breadcrumbareas') }}">Breadcrumb Area</a>
                        <a href="{{ url('/servicedones') }}">Service Done</a>
                        <a href="{{ url('/singleservices') }}">Single Service</a>
                        <a href="{{ url('/sliders') }}">Silder</a>
                        <a href="{{ url('/socilas') }}">Social Media</a>
                        <a href="{{ url('/standardservices') }}">Standard Services</a>
                        <a href="{{ url('/teams') }}">Team</a>
                        <a href="{{ url('/teamareas') }}">Team Area</a>
                        <a href="{{ url('/widgets') }}">Widget</a>
                        <a href="{{ url('/widgetthrees') }}">Widget Three</a>
                        <a href="{{ url('/widgettwos') }}">Widget Two</a>
                       
                       
                       
                        
                </div>
            </div>
        </div>
    </body>
</html>
