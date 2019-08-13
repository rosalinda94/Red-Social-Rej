
@push('styles')
<link href="{{ asset('css/logged/publicacion.css') }}" rel="stylesheet">
@endpush
 <article class="publicacion">
      <ul>
      	<!-- pasar solo estooo -->
			@forelse($posts as $post)

			<article class="publicacion">
        @if (auth()->id()==$post->user_id)
          <form class="eliminar" action="{{URL::to('/')}}/post/{{ $post->id }}" method="POST">
             {{ csrf_field() }}
             {{ method_field('DELETE') }}
             <button id="eliminar" type="submit"><i class="fas fa-trash-alt"></i></button>
           </form>
        @endif
			    <div class="quienPublica">
              <a class="cuadrado5" href="profile"><img id="fotoPerfil5" src="{{ Storage::url($post->user->person->avatar) }}"  alt="" width="50px"></a>
              <div class="quienPublicaInfo">
                <h4 class="userName" >{{$post->user->name}}</h4>
                @isset($post->group)
                <p>Este post pertenece a la categoria : <br class="enter">
                <b> {{$post->group->name}}</b></p>
                @endisset
              </div>
            </div>

              <p class="textoPublicacion">{{$post->body }}</p>

              <img class="imgPublicacion" src="/storage/{{$post->image}}"  alt="">
              <br> <br>

                <div id='publicacion-user' class="publicacion-user">
                  <div class="botones">
                    <a id='like-button' class='like-button' href="#"><i class="fas fa-thumbs-up"></i><span class="likes">Me gusta</span></a>
                    <a id='dislike-button' class='dislike-button' href="#"><i class="fas fa-thumbs-down"></i><span class="likes">No me gusta</span></a>
                    <a id='share-button' class='share-button' href="#"><i class="fas fa-share"></i><span class="likes">compartir</span></a>
                  </div>
                  <div id='interaccion' class="interaccion">
                    <!-- Aca va la informacion sobre la interaccion del usuario con el posteo -->
                    <br>
                    <i class="compartido"><?=
                    $numero_aleatorio = rand(1,5) . ' veces compartidos'; ?></i>
                  </div>
                </div>


                @include('partials.comment')

              <div class="form-row">
              <div class="form-group col-md-12" style="justify-content: center">
                <form action="comment/create" method="POST">

                   {{ csrf_field() }}

                   <input type="hidden" value="<?= $post->id ?>" name="postId">
                    <input type="text" class="" id="bodyComentarios" name="body" placeholder="Deja acá tu comentario">
                 </form>
              </div>

			        </div>
			      </article>

			@empty
			<li class="noPost">No existen posteos </b><i class="fas fa-sad-cry"></i></li>
			@endforelse
		<!-- pasar solo estooo -->
</ul>

      {{ $posts->appends(request()->query())->links() }}
      <script src="{{ asset('js/home.js') }}" defer></script>
       </article>
