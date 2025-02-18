<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Insurance</title>
   @vite(['resources/js/app.js', 'resources/scss/app.scss'])
</head>
<body class="mb-5">
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary sticky-top">

  <div class="container">
    <!-- Navbar brand -->
    <a class="navbar-brand me-2" href="/">
      <img
        src="https://img.freepik.com/free-vector/pink-blue-abstract-logo_1222-54.jpg?t=st=1739838483~exp=1739842083~hmac=84871fc3f603b67e0c1e13be2cde60a3e9e5e472bd1d729933f7d2bf9dfc9aac&w=740"
        height="64"
        alt="logo"
        loading="lazy"
        style="margin-top: -1px;"
      />
    </a>

    <!-- Toggle button -->
    <button
      data-mdb-collapse-init
      class="navbar-toggler"
      type="button"
      data-mdb-target="#navbarButtonsExample"
      aria-controls="navbarButtonsExample"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="bi bi-list"></i></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarButtonsExample">

      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="/">Home</a>
        </li>
      </ul>


      <div class="d-flex align-items-center">
        @guest
        <a href="/login" data-mdb-ripple-init class="btn btn-link px-3 me-2">
          Login
        </a>
        <a href="/register" data-mdb-ripple-init class="btn btn-primary me-3">
          Sign up for free
        </a>
        @endguest
        @auth
          <a href="/client/create" type="button" class="btn btn-primary me-3">
            New insurance
          </a>
          <div class="dropdown">
            <button class="btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-person-circle"></i></i></button>
            <div class="dropdown-menu">
              <a href="/account" class="dropdown-item">My account</a>
              <a href="/client/create" class="dropdown-item">New insurance</a>

              <form method="POST" action="/logout" class="dropdown-item">
                @csrf
                <button type="submit" class="btn btn-secondary">Logout</button>
              </form>
            </div>
          </div>

        @endauth

      </div>
    </div>

  </div>

</nav>

<div class="container">
  {{$slot}}
</div>
</body>


<footer class="bg-dark text-white text-center text-lg-start fixed-bottom">
  <div class="text-center p-3 text-white" >
    © 2025 Copyright:
    <a class="text-white text-decoration-none" href="https://stepansubrt.dev">stepansubrt.dev</a>
  </div>
</footer>
</html>