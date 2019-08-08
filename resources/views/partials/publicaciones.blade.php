 <article class="publicacion">
      <ul>
      	<!-- pasar solo estooo -->
			@forelse($posts as $post)
			<article class="publicacion">
			    <div class="">

              <a class="profile-picture" href="profile/profile"><img src="storage\{{ Auth::user()->person->avatar }}"  alt="" width="50px"></a>
			        <b>{{$post->user->name}}</b>

              <p>{{$post->body }}</p>
              <img src="storage\{{ $post->image  }}"  alt="" width="300px" height="300px">
              <br> <br> 
			        </div>
			        <div class="publicacion-user">


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
			<li><br>No existen posteos </b><img src="/img/triste.jpg" width="150px"></li>
			@endforelse
		<!-- pasar solo estooo -->
</ul>


       </article>