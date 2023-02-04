<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

         <!-- Bootstrap-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>


    </head>
    <body class="font-sans antialiased">

            {{-- sidebar --}}
                <main class="d-flex flex-nowrap bg-dark">

                    <div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark" style="width: 280px;">
                        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                        <svg class="bi pe-none me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
                        <span class="fs-4">Home</span>
                        </a>
                        <hr>
                        <ul class="nav nav-pills flex-column mb-auto">
                        <li>
                            <a href="{{route('admin.roles.index')}}" class="nav-link text-white">
                            <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
                            Roles
                            </a>
                        </li>
                        <li>
                            <a href="{{route('admin.permissions.index')}}" class="nav-link text-white">
                            <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
                            Permissioins
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link text-white">
                            <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
                            Products
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link text-white">
                            <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
                            Customers
                            </a>
                        </li>
                        </ul>
                        <hr>
                        <div class="dropdown">
                        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">

                            <strong>{{Auth::user()->name}}</strong>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark text-small shadow">

                            <li><a class="dropdown-item" href="#">Sign out</a></li>
                        </ul>
                        </div>
                    </div>


            <!-- Page Content -->
            <div>
                {{ $slot }}
            </div>
                    </main>
        {{-- <div class="min-h-screen bg-gray-100">

            @include('layouts.navigation')


            <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>


        </div> --}}



    </body>
</html>
