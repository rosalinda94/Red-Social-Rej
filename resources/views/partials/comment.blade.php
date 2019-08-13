 @forelse($comments as $comment)
    @if ($post->id == $comment->post_id)
    <div class="totalComentario">
    <a class="cuadrado5" href="profile"><img id="fotoPerfil6"  src="storage\{{ $comment->user->person->avatar }}"  alt=""></a>
    <div class="comentarioX">
      <b class="userName2">{{$comment->user->name }}</b>
      <p class="queComento">{{$comment->body }}</p>
    </div>
    @if (auth()->id()==$comment->user_id)
      <form class="eliminar" action="{{URL::to('/')}}/comment/{{ $comment->id }}" method="POST">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
        <button id="eliminado" type="submit"><i id="tacho" class="fas fa-trash-alt"></i></button>
      </form>
    @endif
      </div>
  @endif


  @empty
  @endforelse
