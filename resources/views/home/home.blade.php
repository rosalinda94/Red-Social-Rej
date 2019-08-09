@extends('layouts.app')

@section('content')

  <body class="body">

    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
    <div class="home-logueado">
    <section class="aside">
      <article class="profile-aside">
         <a href="profile.php">
          <img src="storage\{{ Auth::user()->person->avatar }}"  alt="" width="50px">
        </a>

        <!-- poner el nombre del usuario -->
        <a class="profile-picture" href="profile.php"><h3 class="user-name"> {{Auth::user()->name }} <span class="caret"></span></h3></a>
      </article>

      <article class="Listado-completo">
        <h1>home</h1>
      </article>
    </section>

<!-- inicio home principal -->

    <section class="principal">
      <article class="publicar">
        <dir class="que-pensas">
           <form method="POST" enctype="multipart/form-data" action="{{ route('register') }}" >
             <a class="profile-picture" href="profile.php" ><img src="storage\{{ Auth::user()->person->avatar }}"  alt=""></a>
             <textarea name="name" rows="1" cols="60" class="comentario" placeholder="¿Qué estas pensando...?"></textarea>

           </form>

        </dir>


      <article class="publicacion">
      <h2>aca van los post ir a post</h2>
       </article>
    </section>

    <section class="aside2">
      <article class="publicidad">
        <img src="{{asset('/img/publicidadNike.jpg')}}" alt="">
      </article>
      <article class="calendario">
        calendario
      </article>
    </section>
    </div>
  </body>

@endsection
