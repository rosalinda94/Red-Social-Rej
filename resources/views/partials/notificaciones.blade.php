 <li class="nav-item dropdown">
        <a id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"  v-pre><i id="notificaciones" style="color: white" class="fas fa-bell"></i>
        </a>
           <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
          
           	 @forelse($posts as $post)

           	 @if (auth()->id()==$post->etiqueta_id && $post->etiqueta_id !='')
     		<a class="dropdown-item" type="submit" href="filtrarNotificacion?id={{$post->id}} " >El usuario <b>{{ $post->user->name}} </b>Te etiqueto en una publicacion
            </a>
            @endif

         @empty

   <option>No existen notificaciones</option>
   @endforelse
           
        </div>
</li>
