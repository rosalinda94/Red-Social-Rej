@extends('layouts.app')

@section('content')

  <body class="body">

    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
    <div class="home-logueado">

<!-- inicio home principal -->

    <section class="principal">
       <article class="publicar">
        <div class="que-pensas">
          <a class="profile-picture" href="profile.php"><img src="img/foto-perfil.jpg" alt=""></a>
          <textarea name="name" rows="1" cols="70" class="comentario" placeholder="Que quieres escribir hoy?   {{Auth::user()->name }}"></textarea>
        </div>
        <div class="que-publicar">
          <div class="custom-file">
            <input type="file" class="custom-file-input" id="customFile">
            <label class="custom-file-label" for="customFile">Choose file</label>
          </div>
          <input id="file-upload" type="file"/>
          <button style="width:120px;">Etiquetar</button>
          <input type="text" name="" value="">
          <select class="sentimiento-select" name="Sentimiento" style="width:120px;">
            <option disabled selected>Sentimiento</option>
            <option value="fel">Feliz</option>
            <option value="tr">Triste</option>
            <option value="ag">Agradecido</option>
            <option value="en">Enamorado</option>
            <option value="loc">Loco</option>
            <option value="gen">Genial</option>
            <option value="rel">Relajado</option>
            <option value="eno">Enojado</option>
          </select>
          <button type="submit" name="ok"><i class="fas fa-check"></i></button>
        </div>
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
