<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    {{-- Favicon --}}
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    {{-- font awesome icons --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/simple-sidebar.css') }}" rel="stylesheet">

</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="lightseagreen border-right" id="sidebar-wrapper">
      <div class="sidebar-heading text-light font-weight-bold">
        <h2 style="text-shadow: 2px 2px tomato;" >Easy Quiz</h2>
      </div>
      <div class="list-group list-group-flush">
        <a href="{{ route('tests.index') }}" class="list-group-item list-group-item-action lightseagreen text-light font-weight-bold">
          All Quizes
        </a>
        <a href="{{ route('results.index') }}" class="list-group-item list-group-item-action lightseagreen text-light font-weight-bold">
          Results
        </a>
        @if(auth()->user()->isAdmin())
          <a href="{{ route('tests.create') }}" 
            class="list-group-item list-group-item-action lightseagreen text-light font-weight-bold">
            Add New Quiz
          </a>
          <a href="{{ route('questions.index') }}" 
            class="list-group-item list-group-item-action lightseagreen text-light font-weight-bold">
            All Questions
          </a>
        @endif

      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper" style="background-color:aliceblue">

      <nav class="navbar navbar-expand-lg navbar-light lightseagreen border-bottom navbar-dark">
        <button class="btn custom-button custom-button-blue" id="menu-toggle">Toggle Menu</button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon "></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
           
           
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{ Auth::user()->name }} <span class="caret"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('home') }}">Dashboard</a>
                <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
              </div>
            </li>
          </ul>
        </div>
      </nav>



      <div id="app" class="container-fluid">
        
        @if($flash = session('message'))
          <div class="flash-message alert alert-success mt-2" role="alert">
            <p class="font-weight-bold">{{ $flash }}</p>
          </div>
        @endif
        @if($flash = session('error'))
          <div class="flash-message alert alert-danger mt-2" role="alert">
            <p class="font-weight-bold">{{ $flash }}</p>
          </div>
        @endif

        @yield('content')
      </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });

    $(document).ready(function(){
          $(".flash-message").slideDown(300).delay(5000).slideUp(300);
    });
   

  </script>

</body>

</html>
