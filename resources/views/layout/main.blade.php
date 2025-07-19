<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Sevima</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('/template/plugins/fontawesome-free/css/all.min.css') }}" />
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('/template/dist/css/adminlte.min.css') }}" />

  @yield('head')
</head>
<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    @include('layout.component.navbar')
    @include('layout.component.sidebar')

    <div class="content-wrapper">
      <section class="content-header">
        <div class="container-fluid">
          @yield('header')
        </div>
      </section>

      <section class="content">
        <div class="container-fluid">
          @yield('content')
        </div>
      </section>
    </div>

    <footer class="main-footer">
      <div class="float-right d-none d-sm-block"><b>Version</b> 3.2.0</div>
      <strong>Copyright &copy; 2025 </strong> All rights reserved.
    </footer>
  </div>

  <!-- jQuery -->
  <script src="{{ asset('/template/plugins/jquery/jquery.min.js') }}"></script>
  <!-- Bootstrap 4 -->
  <script src="{{ asset('/template/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <!-- AdminLTE App -->
  <script src="{{ asset('/template/dist/js/adminlte.min.js') }}"></script>

  @yield('scripts')
</body>
</html>
