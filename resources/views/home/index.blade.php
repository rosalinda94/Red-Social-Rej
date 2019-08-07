@extends('layouts.app')

@section('content')

  <body class="body">

    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
    <div class="home-logueado">

<!-- inicio home principal -->

    <section class="principal">
      @include('partials.posteo')


      <article class="publicacion">
      <ul>
      	<!-- pasar solo estooo -->
			@forelse($posts as $post)
			<article class="publicacion">
			    <div class="">
			        <img src="storage\{{ $post->image  }}"  alt="" width="50px">

			        <b>{{$post->user->name }}</b>
              <p>{{$post->created_at }}</p>

			        </div>
			        <div class="publicacion-user">

			        <p>{{$post->body }}</p>

              <i class="far fa-thumbs-up"> Me gusta</i>
              <i class="far fa-thumbs-down"> No me gusta</i>
              <i class="fas fa-share"> Compartir</i>
              <i><?=
              $numero_aleatorio = rand(1,5) . ' veces compartidos'; ?></i>
              <div class="form-row">
              <div class="form-group col-md-12" style="justify-content: center">
                <input type="text" class="form-control" id="comment" placeholder="Deja aca tu comentario">
              </div>

			        </div>
			      </article>

			@empty
			<li>no hay posts</li>
			@endforelse
		<!-- pasar solo estooo -->
</ul>


       </article>
    </section>


    </div>
  </body>

@endsection
