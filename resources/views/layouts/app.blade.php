<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Baby Dawn</title>

    <!-- CSS LINKS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('css/signup.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <style>
      .pagination {
      display: flex;
      padding-left: 0;
      list-style: none;
    }
    .pagination-lg .page-link {
      padding: 0.75rem 1.5rem;
      font-size: 1.25rem;
    }
    .pagination-sm .page-link {
      padding: 0.25rem 0.5rem;
      font-size: 0.875rem;
    }
    </style>
  </head>

  <body>
    <!-- Nav Bar -->
    <div>

      <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top" aria-label="Offcanvas navbar large ">
        <div class="container-fluid">
          <a class="navbar-brand" href="/" text-dark>
            <img src="{{asset('assets/images/logo.png')}}" alt="Logo" width="40" height="40" class="align-text-center d-inline-block">
            BABY-DAWN
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar2" aria-controls="offcanvasNavbar2">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="offcanvas offcanvas-end text-bg-light" tabindex="-1" id="offcanvasNavbar2" aria-labelledby="offcanvasNavbar2Label">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasNavbar2Label">MENU</h5>
              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-5">
                <li class="nav-item">
                  <a class="nav-link" style="color: #0E877B;" aria-current="page" href="/">HOME</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/about">ABOUT</a>
                </li>
                <!-- <li class="nav-item">
                  <a class="nav-link" href="/contact">CONTACT</a>
                </li> -->




                @auth

                <li class="nav-item">
                  <a class="nav-link" href="/home">ACCOUNT</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="/profile">PROFILE</a>
                </li>

                <li class="nav-item">
                  <form action="{{route('logout')}}" method="POST">
                  @csrf
                    <button type="submit" class="nav-link" >LOGOUT</button>
                  </form>
                </li>

                @else

                <li class="nav-item">
                  <a class="nav-link" href="{{route('login')}}">SIGN IN</a>
                </li>
                <!-- <li class="nav-item">
                  <a class="nav-link" href="{{route('register')}}">SIGN UP</a>
                </li> -->
                @endauth

                  </ul>
                </li>
              </ul>

            </div>
          </div>
        </div>
      </nav>

      @yield('content')

      <!-- Footer -->
    <div class="container-fluid bg-light " >
      <footer class="flex-wrap py-3 d-flex justify-content-between align-items-center">
        <p class="mb-0 col-md-4 text-muted">&copy; 2023 Baby Dawn</p>



        <ul class="nav col-md-4 justify-content-end">
          <li class="nav-item"><a href="/" class="px-2 nav-link text-muted">Home</a></li>
          <li class="nav-item"><a href="about" class="px-2 nav-link text-muted">About</a></li>
          <!-- <li class="nav-item"><a href="contact" class="px-2 nav-link text-muted">Contact</a></li> -->
        </ul>
      </footer>
    </div>

    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
