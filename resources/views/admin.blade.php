<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <style>
    body {
      min-height: 100vh;
      margin: 0;
      padding: 0;
    }
    .sidebar {
      width: 280px;
      height: 100vh;
      position: fixed;
      top: 0;
      left: 0;
      padding-top: 56px;
      background-color: #f8f9fa;
      overflow-y: auto;
    }
    .main-content {
      margin-left: 280px;
      padding: 76px 20px 20px; /* Increased top padding */
    }
    .dropdown-toggle { outline: 0; }
    .nav-flush .nav-link {
      border-radius: 0;
    }
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Admin Panel</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
        </ul>
        <a href="/logout" class="btn btn-sm btn-secondary">Logout >></a>
      </div>
    </div>
  </nav>

  <div class="sidebar">
    <div class="d-flex flex-column flex-shrink-0 p-3">
      <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
          <a href="#" class="nav-link active" aria-current="page">
            <i class="bi bi-house-door"></i> Home
          </a>
        </li>
        @if(Auth::user()->role == 'operator')
        <li>
          <a href="#" class="nav-link link-dark" data-bs-toggle="collapse" data-bs-target="#operator-collapse" aria-expanded="false">
            <i class="bi bi-gear"></i> Operator Menu
          </a>
          <div class="collapse" id="operator-collapse">
            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
              <li><a href="#" class="nav-link link-dark">Submenu 1</a></li>
              <li><a href="#" class="nav-link link-dark">Submenu 2</a></li>
            </ul>
          </div>
        </li>
        @endif
        @if(Auth::user()->role == 'keuangan')
        <li>
          <a href="#" class="nav-link link-dark" data-bs-toggle="collapse" data-bs-target="#keuangan-collapse" aria-expanded="false">
            <i class="bi bi-cash"></i> Keuangan Menu
          </a>
          <div class="collapse" id="keuangan-collapse">
            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
              <li><a href="#" class="nav-link link-dark">Submenu 1</a></li>
              <li><a href="#" class="nav-link link-dark">Submenu 2</a></li>
            </ul>
          </div>
        </li>
        @endif
        @if(Auth::user()->role == 'marketing')
        <li>
          <a href="#" class="nav-link link-dark" data-bs-toggle="collapse" data-bs-target="#marketing-collapse" aria-expanded="false">
            <i class="bi bi-graph-up"></i> Marketing Menu
          </a>
          <div class="collapse" id="marketing-collapse">
            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
              <li><a href="#" class="nav-link link-dark">Submenu 1</a></li>
              <li><a href="#" class="nav-link link-dark">Submenu 2</a></li>
            </ul>
          </div>
        </li>
        @endif
      </ul>
    </div>
  </div>

  <div class="main-content">
    <h1>Halo!!</h1>
    <div>Selamat datang di halaman admin</div>
    <div class="card mt-3">
      <ul class="list-group list-group-flush">
        @if(Auth::user()->role == 'operator')
        <li class="list-group-item">Menu Operator</li>
        @endif
        @if(Auth::user()->role == 'keuangan')
        <li class="list-group-item">Menu keuangan</li>
        @endif
        @if(Auth::user()->role == 'marketing')
        <li class="list-group-item">Menu Marketing</li>
        @endif
      </ul>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
  </script>
</body>
</html>
