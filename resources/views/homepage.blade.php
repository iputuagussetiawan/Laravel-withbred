<x-layout>
  @push('page-styles')
    @vite (['resources/scss/pages/home.scss'])
  @endpush
  <section class="banner">
      <div class="banner__grid">
        <div class="banner__info">
          <p class="banner__subtitle">
            MONGODB
          </p>
          <h1 class="banner__title">
            Build the next <br>big thing
          </h1>
          <div class="banner__description">
            <p>The developer data platform that provides the services and tools necessary to build distributed applications fast, at the performance and scale users demand.</p>
          </div>
          <div class="banner__action">
            <a href="" class="btn btn-success">Start Free</a>
            <a href="" class="btn btn-simple">
              <span class="btn-simple__text">Documentation</span>
              <span class="btn-simple__arrow"></span>
            </a>
          </div>
          <div class="banner__progress">
            <div class="card-progress">
              <div class="card-progress__counter">
                37+
              </div>
              <div class="card-progress__description">
                <a href="#" class="">Our Best Customers →</a>
              </div>
            </div>

            <div class="card-progress">
              <div class="card-progress__counter">
                100+
              </div>
              <div class="card-progress__description">
                <a href="#" class="">Regions across AWS, Azure, and GCP →</a>
              </div>
            </div>

            <div class="card-progress">
              <div class="card-progress__counter">
                140K+
              </div>
              <div class="card-progress__description">
                <a href="#" class="">Developers join every month →</a>
              </div>
            </div>

            <div class="card-progress">
              <div class="card-progress__counter">
                #1
              </div>
              <div class="card-progress__description">
                <a href="#" class="">Most used modern database →</a>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>
  <div class="container section-padding">
    <div class="row align-items-center">
      <div class="col-lg-7 py-3 py-md-5">
        <h1 class="display-3">Build the next <br>
          big thing</h1>
        <p class="lead text-muted">Are you sick of short tweets and impersonal &ldquo;shared&rdquo; <br>posts that are reminiscent of the late 90&rsquo;s email forwards?<br> We believe getting back to actually writing is the key to enjoying the internet again.</p>
      </div>
      <div class="col-lg-5 pl-lg-5 pb-3 py-lg-5">
        <form action="/register" method="POST" id="registration-form">
          @csrf
          <div class="form-floating mb-3">
            <input value="{{ old('username') }}" name="username" id="username-register" class="form-control" type="text" placeholder="Pick a username" autocomplete="off" />
            @error('username')
              <p class="text-small text-danger">{{$message}}</p>
            @enderror
            <label for="username-register" class="text-muted mb-1"><small>Username</small></label>
          </div>
          <div class="form-floating mb-3">
            <input value="{{ old('email') }}" name="email" id="email-register" class="form-control" type="text" placeholder="you@example.com" autocomplete="off" />
            @error('email')
            <p class="text-small text-danger">{{$message}}</p>
            @enderror
            <label for="email-register" class="text-muted mb-1"><small>Email</small></label>
          </div>
          <div class="form-floating mb-3">
            <input name="password" id="password-register" class="form-control" type="password" placeholder="Create a password" />
            @error('password')
            <p class="text-small text-danger">{{$message}}</p>
            @enderror
            <label for="password-register" class="text-muted mb-1"><small>Password</small></label>
          </div>
          <div class="form-floating mb-3">
            <input name="password_confirmation" id="password-register-confirm" class="form-control" type="password" placeholder="Confirm password" />
            <label for="password-register-confirm" class="text-muted mb-1"><small>Confirm Password</small></label>
          </div>
          <button type="submit" class="py-3 mt-4 btn btn-lg btn-success btn-block">Sign up for OurApp</button>
        </form>
      </div>
    </div>
  </div>
  @push('page-scripts')
    <script>
      
    </script>
  @endpush
</x-layout>