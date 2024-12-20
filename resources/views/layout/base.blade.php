@php
    $current = Route::current()
@endphp

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="{{asset('css/particles.css')}}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    
    <div class="container">
        {{-- particles js DIV  --}}
    <div id="particles-js"></div>

    {{-- Navigation BARRE --}}
    <nav class="navbar navbar-expand-md navbar-light my-3"  style="background: linear-gradient(145deg, #333333, #444444); border-radius: 5px;">
      <div class="container-fluid ">
        <a class="navbar-brand fs-4 fw-bold" href="#" style="color: #5784BA;">ProfitTrack</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link text-white  {{ Request::is('/') ? 'active text-primary' : 'text-white' }}" aria-current="page" href="/">Accueil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('source-revenu') ? 'active text-primary' : 'text-white' }}" href="/source-revenu">Source de revenu</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#">Nouveau bénéfice</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#">Nouvelle dépense</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>


    @yield('content')



    @include('layout.footer')

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <!-- scripts -->
    {{-- script particles JS --}}
    <script src="{{asset('particles_js/particles.js')}}"></script>
    <script src="{{asset('particles_js/app.js')}}"></script>


  
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script>
    // Configuration de votre graphique avec Chart.js
    const ctx = document.getElementById('myChart').getContext('2d');
    const myChart = new Chart(ctx, {
      // ...
    });
  </script>
</body>
</html>