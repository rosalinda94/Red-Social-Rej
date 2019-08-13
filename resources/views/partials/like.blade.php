
@if($post->like)
  <form action="{{ url('post/' . $post->id . '/like') }}" method="POST">
    @csrf
    @method('DELETE')
    <button id='dislike-button' class='dislike-button'><i class="fas fa-thumbs-down"></i>No me gusta</button>
  </form>
@else
  <form action="{{ url('post/' . $post->id . '/like') }}" method="POST">
    @csrf
      <button id='like-button' class='like-button'><i class="fas fa-thumbs-up"></i>Me gusta</button>
  </form>
@endif
