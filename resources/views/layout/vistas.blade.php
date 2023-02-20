<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>WankaNat</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->

        @vite('resources/css/app.css')

    </head>
    <body class="antialiased">
      <!-- Empieza el header -->
         <!-- Navbar -->
     <nav id="header" class="main-header navbar navbar-expand navbar-dark navbar-toggler-right">
      <!-- Left navbar links -->
     <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
        <a href="/" class="nav-link">Home</a>
        </li>
      </ul>
       
  
      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
          <li class="nav-item d-none d-sm-inline-block">
            <a href="/registrar" class="nav-link">Registrar</a> 
          </li>
          <li class="nav-item d-none d-sm-inline-block">
            <a href="/login" class="nav-link">Login</a> 
          </li>
        
        <li class="nav-item">
          <a class="nav-link" data-widget="navbar-search" href="#" role="button">
            <i class="bi bi-caret-right-fill"></i>
          </a>
          <div class="navbar-search-block">
            <form class="form-inline">
              <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                  <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                  <button>Inicio</button>
                  <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </li>
    
        <!-- Messages Dropdown Menu -->
        
        <!-- Notifications Dropdown Menu -->

        <li class="nav-item">
          <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
            <i class="fas fa-th-large"></i>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

<!-- Aqui empieza el menu -->
   <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">


    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('img/logo1.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">WankaNat</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
                <a href="/" class="nav-link">
                  <i class="nav-icon fas fa-columns"></i>
                  <p>
                    Sistema de WankaNat
                  </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="/" class="nav-link">
                  <i class="bi bi-caret-right-fill"></i>
                  <p>
                    Servicios
                  </p>
                </a>
              </li>

          <li class="nav-item">
            <a href="/" class="nav-link">
              <i class="nav-icon fas fa-address-book"></i>
              <p>
                Clientes
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-money-check-alt"></i>
              <p>
                Ventas
              </p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-suitcase"></i>
              <p>
                Caja
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-at"></i>
              <p>
                Usuarios
              </p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  <div class="text-center"><i class="bi bi-caret-right-fill">@yield('welcome')</i></div>

  <div>@yield('login')</div>

  <div>@yield('registrar')</div>

  <!-- Aqui empieza el footer -->
  <footer class="main-footer">
        <div class="float-right d-none d-sm-block">
          <b>Version</b> 1.0.0
        </div>
        <strong>Copyright &copy; 2023 <a href="#">WANKANAT</a>.</strong> Todos los derechos reservados.
  </footer>


    </body>
</html>