<!DOCTYPE html>
<!--
* CoreUI - Free Bootstrap Admin Template
* @version v4.0.2
* @link https://coreui.io
* Copyright (c) 2021 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://coreui.io/license)
-->
<!-- Breadcrumb-->
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>@yield('title-tab')</title>
    <link rel="apple-touch-icon" sizes="57x57" href="{{url("/assets/favicon/apple-icon-57x57.png")}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{url("/assets/favicon/apple-icon-60x60.png")}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{url("/assets/favicon/apple-icon-72x72.png")}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{url("/assets/favicon/apple-icon-76x76.png")}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{url("/assets/favicon/apple-icon-114x114.png")}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{url("/assets/favicon/apple-icon-120x120.png")}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{url("/assets/favicon/apple-icon-144x144.png")}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{url("/assets/favicon/apple-icon-152x152.png")}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{url("/assets/favicon/apple-icon-180x180.png")}}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{url("/assets/favicon/android-icon-192x192.png")}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{url("/assets/favicon/favicon-32x32.png")}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{url("/assets/favicon/favicon-96x96.png")}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{url("/assets/favicon/favicon-16x16.png")}}">
    <link rel="manifest" href="{{url("/assets/favicon/manifest.json")}}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Vendors styles-->
    <link rel="stylesheet" href="{{url("/vendors/simplebar/css/simplebar.css")}}">
    <link rel="stylesheet" href="{{url("/css/vendors/simplebar.css")}}">
    <!-- Main styles for this application-->
    <link href="{{url("/css/style.css")}}" rel="stylesheet">
    <!-- We use those styles to show code examples, you should remove them in your application.-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/prismjs@1.23.0/themes/prism.css">
    <link href="{{url("/css/examples.css")}}" rel="stylesheet">
    
  </head>
  <body>
    @include('layout.sidebar')
    <div class="wrapper d-flex flex-column min-vh-100 bg-light">
      @include('layout.header')
      <div class="body flex-grow-1 px-3">
        <div class="container-lg">
          @hasSection('title-page')
            <h1 class="title-content">@yield('title-page')</h1>
          @endif

          @if(session()->has('success'))
          <div class="alert alert-info">
              {{ session('success') }}
          </div>
      @elseif(session()->has('error'))
          <div class="alert alert-danger">
              {{ session('error') }}
          </div>
      @elseif(session()->has('errors'))
          <div class="alert alert-danger">
              @foreach (session('errors') as $error)
                  {{ session('error') }}
              @endforeach
          </div>
      @endif
          @yield('content')
        </div>
      </div>
      <footer class="footer">
        <div>Katrega v3 | 2021</div>
        <div class="ms-auto">Powered by&nbsp;<a href="https://instagram.com/_fstuar">Franklin Peñafiel</a></div>
      </footer>
    </div>
    <!-- CoreUI and necessary plugins-->
    <script src="{{url("/vendors/@coreui/coreui/js/coreui.bundle.min.js")}}"></script>
    <script src="{{url("/vendors/simplebar/js/simplebar.min.js")}}"></script>
    <!-- We use those scripts to show code examples, you should remove them in your application.-->
    <script src="https://cdn.jsdelivr.net/npm/prismjs@1.24.1/prism.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/prismjs@1.24.1/plugins/autoloader/prism-autoloader.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/prismjs@1.24.1/plugins/unescaped-markup/prism-unescaped-markup.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/prismjs@1.24.1/plugins/normalize-whitespace/prism-normalize-whitespace.js"></script>
    <script>
    </script>

  </body>
</html>