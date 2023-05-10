<x-layout>
  @push('page-styles')
    @vite (['resources/scss/pages/home.scss'])
  @endpush
  <section class="banner">
      <img class="banner__art-one" src="{{ asset('images/banner-art-bottom-right.svg') }}" alt="art who us">
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
        <div class="banner__image">
          
        </div>
      </div>
  </section>
  <section class="who-us section-padding--bottom">
    <img class="who-us__art-one" src="{{ asset('images/who-us__art-left.svg') }}" alt="art who us">
    <div class="container">
      <div class="who-us__grid">
        <div class="who-us__content">
          <div class="card-whous">
            <div class="card-whous__info">
                <h2 class="card-whous__title">
                  MongoDB University
                </h2>
                <div class="card-whous__description">
                  The new learning experience makes picking up knowledge, developing a fundamental MongoDB skill set, and getting certified both quick and easy.
                </div>
                <div class="card-whous__action">
                  <a href="" class="btn btn-secondary">Explore now</a>
                </div>
            </div>
            <div class="card-whous__image">
              <img src="{{ asset('images/cms-home-image.svg') }}" alt="who us image">
            </div>
          </div>
        </div>
       
      </div>
    </div>
  </section>
  <section class="community section-padding">
    <div class="container">
      <h2 class="community__title">
        Built by developers, for developers
      </h2>
      <p class="community__subtitle">
        The document data model maps to how you think and code.
      </p>
      <div class="community__grid">
        <div class="accordion accordion-flush accordion-one" id="accordion-one">
          <div class="accordion-item accordion-one__item">
            <h2 class="accordion-header accordion-one__header" id="flush-headingOne">
              <button class="accordion-button  collapsed accordion-one__button" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                Model
              </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse accordion-one__collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordion-one">
              <div class="accordion-body accordion-one__body">
                Break out of rigid, tabular data structures with flexible documents that map directly to objects in your code. Embed related data into a single document to increase performance and minimize computational cost.
              </div>
            </div>
          </div>
          <div class="accordion-item accordion-one__item">
            <h2 class="accordion-header accordion-one__header" id="flush-headingTwo">
              <button class="accordion-button collapsed accordion-one__button" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                Query
              </button>
            </h2>
            <div id="flush-collapseTwo" class="accordion-collapse collapse accordion-one__collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordion-one">
              <div class="accordion-body accordion-one__body">
                Take advantage of a simple and expressive query API to retrieve and modify documents in a single collection or join across collections. Transform and analyze your data in place – no ETL or duplication needed – with a powerful aggregation pipeline.
              </div>
            </div>
          </div>
          <div class="accordion-item accordion-one__item">
            <h2 class="accordion-header accordion-one__header" id="flush-headingThree">
              <button class="accordion-button collapsed accordion-one__button" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                Optimize
              </button>
            </h2>
            <div id="flush-collapseThree" class="accordion-collapse collapse accordion-one__collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordion-one">
              <div class="accordion-body accordion-one__body">
                Optimize queries, react instantly to database changes, and generate materialized views on-demand. MongoDB makes it easy to receive and process millions of requests per day with no change in performance.
              </div>
            </div>
          </div>
        </div>
        <div class="community__image-container">
          <img src="" alt="">
        </div>
      </div>
      <div class="community__lists">
        <div class="card-community">
          <div class="card-community__icon-container">
            <img class="card-community__icon" src="{{ asset('images/pages/home/sections/community/doc.svg') }}" alt="doc image">
          </div>
          <h3 class="card-community__title">
            Docs
          </h3>
          <div class="card-community__description">
            Reference manuals, articles, and code samples — all the technical documentation you need to deploy, configure, and run MongoDB.
          </div>
          <a href="" class="card-community__link">Documentation <span class="card-community__link-arrow"></span></a>
        </div>
        <div class="card-community">
          <div class="card-community__icon-container">
            <img class="card-community__icon" src="{{ asset('images/pages/home/sections/community/develop-center.svg') }}" alt="developer center image">
          </div>
          <h3 class="card-community__title">
            Developer Center
          </h3>
          <div class="card-community__description">
            The latest MongoDB tutorials, videos, and code examples shown in the language of your choice.
          </div>
          <a href="" class="card-community__link">Start Building <span class="card-community__link-arrow"></span></a>
        </div>
        <div class="card-community">
          <div class="card-community__icon-container">
            <img class="card-community__icon" src="{{ asset('images/pages/home/sections/community/community-forum.svg') }}" alt="developer center image">
          </div>
          <h3 class="card-community__title">
            Community Forum
          </h3>
          <div class="card-community__description">
            Join 140K+ developers on our Community Forums to get advice, learn tips and tricks, and share your projects and experience.
          </div>
          <a href="" class="card-community__link">Join the Community <span class="card-community__link-arrow"></span></a>
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