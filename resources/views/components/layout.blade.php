<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>
        @isset($doctitle)
            {{ $doctitle }} | OurApp
        @else
            OurApp
        @endisset
    </title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display&family=Poppins:wght@100;200;300;400;700&family=Source+Code+Pro:ital,wght@0,300;0,600;0,700;1,400&display=swap"
        rel="stylesheet">
    @vite (['resources/js/app.js'])
    @vite (['resources/scss/app.scss'])
    @stack('page-styles')
</head>

<body>
    {{-- <header class="navbar-custom header-bar mb-3">
            <div class="container-fluid d-flex flex-column flex-md-row align-items-center p-3">
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
                    @if (auth()->user()->is_admin)
                        <a href="/posts">All Post</a>
                    @endif
                    <a href="/profile/{{ auth()->user()->username }}" class="mr-2">
                        <img title="My Profile" data-toggle="tooltip" data-placement="bottom" style="width: 32px; height: 32px; border-radius: 16px" src="{{auth()->user()->avatar}}" />
                    </a>
                    <a class="btn btn-sm btn-success mr-2" href="/create-post">Create Post</a>
                    <form action="/logout" method="POST" class="d-inline">
                        @csrf
                        <button class="btn btn-sm btn-success">Sign Out</button>
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
                                <button class="btn btn-success btn-sm">Sign In</button>
                            </div>
                        </div>
                    </form>
                @endauth
            </div>
        </header> --}}
    <div id="" class="nav-top">
        <div class="event-banner">
            <div class="event-banner__action">
                <a href="#" class="event-banner__button">Event</a>
            </div>
            <div class="event-banner__title">
                Last call! Register for MongoDB.local NYC by May 12 to save 50% on your registration. Learn more >
            </div>
        </div>
    </div>
    <nav class="navbar-custom navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Brand</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="main_nav">
                <ul class="navbar-nav">
                    <li class="nav-item active"> <a class="nav-link" href="#">Home </a> </li>
                    <li class="nav-item"><a class="nav-link" href="#"> About </a></li>
                    <li class="nav-item"><a class="nav-link" href="#"> Services </a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"> Hover me </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#"> Submenu item 1</a></li>
                            <li><a class="dropdown-item" href="#"> Submenu item 2 </a></li>
                            <li><a class="dropdown-item" href="#"> Submenu item 3 </a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"> Solutions </a>
                        <div class="dropdown-menu dropdown-large">
                            <div class="dropdown-large__grid-3">
                                <div class="dropdown-large__col">
                                    <div class="dropdown-large__title-wrapper">
                                        <h3 class="dropdown-large__title">By Industry</h3>
                                        <p class="dropdown-large__subtitle">Developer data platform</p>
                                    </div>
                                    <div class="dropdown-large__menu">
                                        <ul class="dropdown-large__list">
                                            <li class="dropdown-large__list-item">
                                                <a class="dropdown-large__list-link" href="">Financial
                                                    Services</a>
                                            </li>
                                            <li class="dropdown-large__list-item">
                                                <a class="dropdown-large__list-link" href="">Heltcare</a>
                                            </li>
                                            <li class="dropdown-large__list-item">
                                                <a class="dropdown-large__list-link" href="">Retails</a>
                                            </li>
                                            <li class="dropdown-large__list-item">
                                                <a class="dropdown-large__list-link" href="">Public Sector</a>
                                            </li>
                                            <li class="dropdown-large__list-item">
                                                <a class="dropdown-large__list-link" href="">Manufacuring</a>
                                            </li>
                                            <li class="dropdown-large__list-item">
                                                <a class="dropdown-large__list-link" href="">All Industries</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="dropdown-large__col">
                                    <div class="dropdown-large__title-wrapper">
                                        <h3 class="dropdown-large__title">By Industry</h3>
                                        <p class="dropdown-large__subtitle">Developer data platform</p>
                                    </div>
                                    <div class="dropdown-large__menu">
                                        <ul class="dropdown-large__list">
                                            <li class="dropdown-large__list-item">
                                                <a class="dropdown-large__list-link" href="">Financial
                                                    Services</a>
                                            </li>
                                            <li class="dropdown-large__list-item">
                                                <a class="dropdown-large__list-link" href="">Heltcare</a>
                                            </li>
                                            <li class="dropdown-large__list-item">
                                                <a class="dropdown-large__list-link" href="">Retails</a>
                                            </li>
                                            <li class="dropdown-large__list-item">
                                                <a class="dropdown-large__list-link" href="">Public Sector</a>
                                            </li>
                                            <li class="dropdown-large__list-item">
                                                <a class="dropdown-large__list-link" href="">Manufacuring</a>
                                            </li>
                                            <li class="dropdown-large__list-item">
                                                <a class="dropdown-large__list-link" href="">All Industries</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="dropdown-large__col">
                                    <div class="dropdown-large__title-wrapper">
                                        <h3 class="dropdown-large__title">By Industry</h3>
                                        <p class="dropdown-large__subtitle">Developer data platform</p>
                                    </div>
                                    <div class="dropdown-large__menu">
                                        <ul class="dropdown-large__list">
                                            <li class="dropdown-large__list-item">
                                                <a class="dropdown-large__list-link" href="">Financial
                                                    Services</a>
                                            </li>
                                            <li class="dropdown-large__list-item">
                                                <a class="dropdown-large__list-link" href="">Heltcare</a>
                                            </li>
                                            <li class="dropdown-large__list-item">
                                                <a class="dropdown-large__list-link" href="">Retails</a>
                                            </li>
                                            <li class="dropdown-large__list-item">
                                                <a class="dropdown-large__list-link" href="">Public Sector</a>
                                            </li>
                                            <li class="dropdown-large__list-item">
                                                <a class="dropdown-large__list-link" href="">Manufacuring</a>
                                            </li>
                                            <li class="dropdown-large__list-item">
                                                <a class="dropdown-large__list-link" href="">All Industries</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                            <img class="navbar-photo" src="{{ asset('images/users/user-male.jpeg') }}"
                                alt="username">
                            AG
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-user">
                            <li class="dropdown-menu-user__header">
                                <div class="card-user-menu">
                                    <div class="card-user-menu__image-container">
                                        <img class="card-user-menu__image"
                                            src="{{ asset('images/users/user-male.jpeg') }}" alt="username">
                                    </div>
                                    <div class="card-user-menu__info">
                                        <h3 class="card-user-menu__full-name">I Putu Agus Setiawan</h3>
                                        <p class="card-user-menu__email">agussetiawaniputu@gmail.com</p>
                                    </div>
                                </div>
                            </li>
                            <li class="dropdown-menu-user__body">
                                <a class="dropdown-item dropdown-menu-user__item" href="#"> Pembelian</a>
                                <a class="dropdown-item dropdown-menu-user__item" href="#"> Wishlist </a>
                                <a class="dropdown-item dropdown-menu-user__item" href="#"> Toko Pavorite </a>
                            </li>
                            <li class="dropdown-menu-user__footer">
                                <a href="#" class="dropdown-menu-user__footer-link">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
                                        <path
                                            d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z" />
                                        <path
                                            d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z" />
                                    </svg>
                                    Setting
                                </a>
                                <a href="#" class="dropdown-menu-user__footer-link">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z" />
                                        <path fill-rule="evenodd"
                                            d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                                    </svg>
                                    Logout
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div> 
        </div> 
    </nav>


    <main>
        <!-- header ends here -->
        @if (session()->has('success'))
            <div class="container container--narrow">
                <div class="alert alert-success text-center" role="alert">
                    {{ session('success') }}
                </div>
            </div>
        @endif
        @if (session()->has('failure'))
            <div class="container container--narrow">
                <div class="alert alert-danger text-center" role="alert">
                    {{ session('failure') }}
                </div>
            </div>
        @endif
        {{ $slot }}
    </main>
    <!-- footer begins -->
    <footer class="border-top text-center small text-muted py-3">
        <p class="m-0">Copyright &copy; {{ date('Y') }} <a href="/" class="text-muted">Our App</a>. All
            rights reserved.</p>
    </footer>

    @stack('page-scripts')
</body>

</html>
