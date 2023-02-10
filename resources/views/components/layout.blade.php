<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>My App</title>
    @vite (['resources/js/app.js'])
    @vite (['resources/scss/app.scss'])
  </head>
  <body>
    <header class="navbar-custom header-bar mb-3">
      <div class="container d-flex flex-column flex-md-row align-items-center p-3">
        <h4 class="my-0 mr-md-auto font-weight-normal"><a href="/">Our App</a></h4>
        @auth
        <div class="flex-row my-3 my-md-0 ms-auto">
          <a href="#" class="text-white mr-2 header-search-icon" title="Search" data-toggle="tooltip" data-placement="bottom"><i class="fas fa-search"></i></a>
          <span class="text-white mr-2 header-chat-icon" title="Chat" data-toggle="tooltip" data-placement="bottom"><i class="fas fa-comment"></i></span>
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
    </body>
  </html>
  
