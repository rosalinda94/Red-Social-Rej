 <article class="publicacion">
      <ul>
        <!-- pasar solo estooo -->

      @forelse($posts as $post)
      
      @if (auth()->id()==$post->user_id)
      <article class="publicacion">
          <div class="">


              <a class="profile-picture" href="profile/profile"><img src="{{ Storage::url(Auth::user()->person->avatar) }}"  alt="" width="50px"></a>


              <b>{{$post->user->name}}</b><br>
              @isset($post->group)
              <p>Este post pertenece a la categoria :<b> {{$post->group->name}}</b></p>

              @endisset


              <p>{{$post->body }}</p>

              <img src="/storage/{{$post->image}}"  alt="" width="300px" height="300px">
              <br> <br>
              </div>
                <div id='publicacion-user' class="publicacion-user">
                  <div class="botones">
                    <a id='like-button' class='like-button' href="#"><i class="far fa-thumbs-up"> Me gusta</i></a>
                    <a id='dislike-button' class='dislike-button' href="#"><i class="far fa-thumbs-down"> No me gusta</i></a>
                    <a id='share-button' class='share-button' href="#"><i class="fas fa-share">  Compartir</i></a>
                  </div>
                  <div id='interaccion' class="interaccion">
                    <!-- Aca va la informacion sobre la interaccion del usuario con el posteo -->
                    <i><?=
                    $numero_aleatorio = rand(1,5) . ' veces compartidos'; ?></i>
                  </div>
                </div>

              @if (auth()->id()==$post->user_id)
                <form action="{{URL::to('/')}}/post/{{ $post->id }}" method="POST">
                   {{ csrf_field() }}
                   {{ method_field('DELETE') }}
                   <button type="submit">Eliminar</button>
                 </form>
              @endif

                  @forelse($comments as $comment)
                  @if ($post->id == $comment->post_id)
                 <b>{{$post->user->name }}</b> 
                <p>{{$comment->body }}</p>
              @endif
                   

                @empty
                @endforelse
              <div class="form-row">
              <div class="form-group col-md-12" style="justify-content: center">
                <form action="comment/create" method="POST">
                 
                   {{ csrf_field() }}
                   <input type="hidden" name="postid" value="1">
                    <input type="text" class="form-control" id="body" name="body" placeholder="Deja aca tu comentario">
                 </form>
              </div>

              </div>
            </article>
 @endif
      @empty
      <li><br>No existen posteos </b><img src="/img/triste.jpg" width="150px"></li>
      @endforelse
    <!-- pasar solo estooo -->
</ul>

      {{ $posts->appends(request()->query())->links() }}
      
       </article>
