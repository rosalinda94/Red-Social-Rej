@extends('layouts.app')

@section('content')
  <body class="body">

    @include('home.loading')
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
    <div class="home-logueado">

<section class="aside">
      <article class="profile-aside">
<<<<<<< HEAD
       <a class="profile-picture" href="profile/profile"><img src="{{ Storage::url(Auth::user()->person->avatar) }}"  alt="" width="50px"> </a>
=======
       <a class="profile-picture" href="profile/profile"><img src="storage\{{ Auth::user()->person->avatar }}"  alt="" width="50px"> </a>
>>>>>>> b52847cb99e162916ccb462427a8a7ec60ec8bab
        <!-- poner el nombre del usuario -->
        <a class="profile-picture" href="profile.php"><h3 class="user-name">{{Auth::user()->person->name }} {{Auth::user()->person->lastName }}</h3></a>
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
