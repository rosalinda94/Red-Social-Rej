@extends('layouts.app')
@push('styles')
  <link href="{{ asset('css/home.css') }}" rel="stylesheet">
  <link href="{{ asset('css/logged/grupos.css') }}" rel="stylesheet">
  
@endpush
@section('content')
  <body class="body">

    @include('home.loading')

    <div class="home-logueado">

      <section class="aside">
      <article class="profile-aside">
        <div class="cuadrado4">
          <img id="fotoPerfil4" src="{{ Storage::url(Auth::user()->person->avatar) }}">
        </div>
        <!-- poner el nombre del usuario -->
        <a class="profile-name" href="profile.php"><h3 class="user-name">{{Auth::user()->person->name }} {{Auth::user()->person->lastName }}</h3></a>
      </article>

      <article class="Accesos-directos">
          @include('partials.grupos')
      </article>


    </section>
<!-- inicio home principal -->

    <section class="principal">

      @include('partials.posteo')

      @include('partials.publicaciones')

    </section>

<section class="aside2">
      <article class="publicidad">
        @include('partials.publicidad')
      </article>
      <article class="calendario">
        calendario
      </article>
    </section>
    </div>
  </body>

@endsection
