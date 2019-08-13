
<div id='publicacion-user' class="publicacion-user">
    <div class="botones">
      <!-- inicio Esto es lo de los like -->
	@if($post->liked)
	  <form action="{{ url('post/' . $post->id . '/like') }}" method="POST">
	    @csrf
	    @method('DELETE')
	    <button id='dislike-button' class='dislike-button'><i class="fas fa-thumbs-down"></i><span class="likes">No me gusta</span></button>
	  </form>
	@else
	  <form action="{{ url('post/' . $post->id . '/like') }}" method="POST">
	    @csrf
	      <button id='like-button' class='like-button'><i class="fas fa-thumbs-up"></i><span class="likes">Me gusta</span></button>
	  </form>
	@endif

      <!-- fin  Esto es lo de los like -->
        <a id='share-button' class='share-button' href="#"><i class="fas fa-share"></i><span class="likes">compartir</span></a>
      </div>
      <div id='interaccion' class="interaccion">
        <!-- Aca va la informacion sobre la interaccion del usuario con el posteo -->
        <br>
        <i class="compartido"><?=
        $numero_aleatorio = rand(1,5) . ' veces compartidos'; ?></i>
      </div>
    </div>
