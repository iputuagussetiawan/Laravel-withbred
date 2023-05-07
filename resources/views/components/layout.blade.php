<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>
            @isset($doctitle)
                {{$doctitle}} | OurApp
            @else
                OurApp
            @endisset
        </title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display&family=Poppins:wght@100;200;300;400;700&family=Source+Code+Pro:ital,wght@0,300;0,600;0,700;1,400&display=swap" rel="stylesheet">
        @vite (['resources/js/app.js'])
        @vite (['resources/scss/app.scss'])
        @stack('page-styles')
    </head>
    <body>
        <header class="navbar-custom header-bar mb-3">
            <div class="container d-flex flex-column flex-md-row align-items-center p-3">
                <h4 class="my-0 mr-md-auto font-weight-normal"><a href="/">Our App</a></h4>
                @auth
                <div class="flex-row my-3 my-md-0 ms-auto">
                    <a href="#" class="text-white mr-2 header-search-icon" title="Search" data-toggle="tooltip" data-placement="bottom">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="red" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                        </svg>
                    </a>
                    <span class="text-white mr-2 header-chat-icon" title="Chat" data-toggle="tooltip" data-placement="bottom">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="red" class="bi bi-chat-dots" viewBox="0 0 16 16">
                            <path d="M5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                            <path d="m2.165 15.803.02-.004c1.83-.363 2.948-.842 3.468-1.105A9.06 9.06 0 0 0 8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6a10.437 10.437 0 0 1-.524 2.318l-.003.011a10.722 10.722 0 0 1-.244.637c-.079.186.074.394.273.362a21.673 21.673 0 0 0 .693-.125zm.8-3.108a1 1 0 0 0-.287-.801C1.618 10.83 1 9.468 1 8c0-3.192 3.004-6 7-6s7 2.808 7 6c0 3.193-3.004 6-7 6a8.06 8.06 0 0 1-2.088-.272 1 1 0 0 0-.711.074c-.387.196-1.24.57-2.634.893a10.97 10.97 0 0 0 .398-2z"/>
                        </svg>
                    </span>
                    @if (auth()->user()->is_admin )
                        <a href="/posts">All Post</a>
                    @endif
                    <a href="/profile/{{ auth()->user()->username }}" class="mr-2">
                        <img title="My Profile" data-toggle="tooltip" data-placement="bottom" style="width: 32px; height: 32px; border-radius: 16px" src="{{auth()->user()->avatar}}" />
                    </a>
                    <a class="btn btn-sm btn-success mr-2" href="/create-post">Create Post</a>
                    <form action="/logout" method="POST" class="d-inline">
                        @csrf
                        <button class="btn btn-sm btn-secondary">Sign Out</button>
                    </form>
                </div>
                @else
                    <form action="/login" method="POST" class="mb-0 pt-2 pt-md-0 ms-auto">
                @csrf
                        <div class="row align-items-center">
                            <div class="col-md mr-0 pr-md-0 mb-3 mb-md-0">
                                <input name="loginusername" class="form-control form-control-sm" type="text" placeholder="Username" autocomplete="off" />
                            </div>
                            <div class="col-md mr-0 pr-md-0 mb-3 mb-md-0">
                                <input name="loginpassword" class="form-control form-control-sm input-dark" type="password" placeholder="Password" />
                            </div>
                            <div class="col-md-auto">
                                <button class="btn btn-primary btn-sm">Sign In</button>
                            </div>
                        </div>
                    </form>
                @endauth
            </div>
        </header>
        <main>
            <!-- header ends here -->
            @if (session()->has('success'))
                <div class="container container--narrow">
                    <div class="alert alert-success text-center" role="alert">
                    {{session('success')}}
                    </div>
                </div>
            @endif
            @if (session()->has('failure'))
            <div class="container container--narrow">
                <div class="alert alert-danger text-center" role="alert">
                {{session('failure')}}
                </div>
            </div>
            @endif
            {{ $slot }}
        </main>
        <!-- footer begins -->
        <footer class="border-top text-center small text-muted py-3">
            <p class="m-0">Copyright &copy; {{ date('Y') }} <a href="/" class="text-muted">Our App</a>. All rights reserved.</p>
        </footer>

        @stack('page-scripts')
    </body>
</html>
