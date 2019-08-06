@extends('layouts.app')

@section('content')

  <body class="body">

    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
    <div class="home-logueado">

<!-- inicio home principal -->

    <section class="principal">
       <article class="publicar">
         <form class="" action="post" method="post" enctype="multipart/form-data">
           @csrf

        <div class="que-pensas">
          <a class="profile-picture" href="profile.php"><img src="storage\{{ Auth::user()->person->avatar }}"  alt="" width="50px"></a>
          <textarea name="title" rows="1" cols="70" class="comentario" placeholder="Que quieres escribir hoy?   {{Auth::user()->name }}"></textarea>
          <textarea name="body" rows="1" cols="70" class="comentario" placeholder="Que quieres escribir hoy?   {{Auth::user()->name }}"></textarea>
        </div>
        <div class="que-publicar">
          <div class="form-group row">
              <label for="avatar" class="col-md-4 col-form-label text-md-right">{{ __('Foto de perfil') }}</label>

              <div class="col-md-6">
                  <input style="color:transparent" id="avatar" type="file" class=" @error('avatar') is-invalid @enderror" accept="image/*" name="avatar" value="{{ old('avatar') }}" required autocomplete="avatar" autofocus>

                  @error('avatar')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>
          </div>

          <select class="btn btn-outline-secondary">
            <option disabled selected>Etiquetar a </option>
            @forelse($users as $user)
            <option value="fel"> {{$user->name }}</option>
                @empty
          <option>no hay socios</option>
          @endforelse

          </select>
          <button type="submit" class="btn btn-outline-secondary">Publicar</button>
        </div>
      </form>

      </article>


      <article class="publicacion">
      <ul>
      	<!-- pasar solo estooo -->
			@forelse($posts as $post)
			<article class="publicacion">
			    <div class="">
			        <img src="storage\{{ $post->image  }}"  alt="" width="50px">
			        <b>{{$post->user->name }}</b>
			        <p>{{$post->create_at }}</p>
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
