@extends('layouts.app')

@push('styes')

@endpush

@section('content')
  <link href="{{ asset('css/home.css') }}" rel="stylesheet">

  <body class="body">

    <div class="home-logueado">
    <section class="aside">
      <article class="profile-aside">
         <a href="profile.php">
           <div class="cuadrado">
             <img id="fotoPerfil" src="storage\{{ Auth::user()->person->avatar }}">
           </div>
        </a>

        <!-- poner el nombre del usuario -->
        <a id="nombreUsuario" href="profile.php"><h3 class="user-name"> {{Auth::user()->name }} <span class="caret"></span></h3></a>
      </article>

      <article class="Listado-completo">
        <h1>home</h1>
        @include('/home.group')
      </article>
    </section>

<!-- inicio home principal -->

    <section class="principal">


      <article class="publicacion">
      <h2>aca van los post ir a post</h2>
       </article>
    </section>

    <section class="aside2">
      <article class="publicidad">
        publicidad
      </article>
      <article class="calendario">
        calendario
      </article>
    </section>
    </div>
  </body>

@endsection
