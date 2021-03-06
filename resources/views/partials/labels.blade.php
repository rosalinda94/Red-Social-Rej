@push('styles')
<link href="{{ asset('css/logged/publicacion.css') }}" rel="stylesheet">
@endpush

 <article class="publicacion">
      <ul class="publicaciones">
        <!-- pasar solo estooo -->
      @forelse($posts as $post)
      
      @if (auth()->id()==$post->etiqueta_id)
      <article class="publicacion">
          <div class="quienPublica">
              <a class="cuadrado5" href="profile"><img id="fotoPerfil5" src="{{ Storage::url($post->user->person->avatar) }}"  alt="" width="50px"></a>
              <div class="quienPublicaInfo">
                <h4 class="userName" >{{$post->user->name}}</h4>
                @isset($post->group)
                <p>Este post pertenece a la categoria :<b> {{$post->group->name}}</b></p>
                @endisset
              </div>
            </div>

              <p class="textoPublicacion">{{$post->body }}</p>

              <img class="imgPublicacion" src="/storage/{{$post->image}}"  alt="">
              <br> <br>
                @include('partials.like')

                @include('partials.comment')

               <div class="form-row">
              <div class="form-group col-md-12" style="justify-content: center">
                <form action="comment/create" method="POST">

                   {{ csrf_field() }}

                   <input type="hidden" value='1' name="postid">
                    <input type="text" class="" id="bodyComentarios" name="body" placeholder="Deja acá tu comentario">
                 </form>
              </div>

              </div>
            </article>
@endif
      @empty
      <li class="noPost">No existen etiquetas </b><i class="fas fa-sad-cry"></i></li>
      @endforelse
    <!-- pasar solo estooo -->
</ul>

      {{ $posts->appends(request()->query())->links() }}

       </article>
