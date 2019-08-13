  @push('styles')
    <link href="{{ asset('css/logged/publicar.css') }}" rel="stylesheet">
  @endpush

<article class="publicar">
  <form class="" action="index" method="post" enctype="multipart/form-data">
    @csrf

 <div class="que-pensas">
   <a class="cuadrado2" href="profile"><img id="fotoPerfil2" src="{{ Storage::url(Auth::user()->person->avatar) }}"  alt=""></a>
   <textarea name="body" rows="1" cols="60" class="comentario" placeholder="{{Auth::user()->name }}, qué queres escribir hoy?"></textarea>
 </div>

 <div class="que-publicar">
   <div class="subiFoto">
     <label for="avatar" class="labelAvatar">{{ __('Compartí tus imagenes') }}</label>
         <input style='display:none' id="avatar" type="file" class=" @error('avatar') is-invalid @enderror" accept="image/*" name="avatar" value="{{ old('avatar') }}"  autocomplete="avatar" autofocus>

         @error('avatar')
             <span class="invalid-feedback" role="alert">
                 <strong>{{ $message }}</strong>
             </span>
         @enderror
   </div>

      <div class="etiqueta">
   <select  id="etiqueta" name="etiqueta"  >
     <option disabled selected>Etiquetar a </option>
     @forelse($users as $user)
     <option id="etiqueta" name="etiqueta"  value="{{$user->id}}"> {{$user->name }}</option>
         @empty
   <option>no hay amigos</option>
   @endforelse
   </select>
   </div>
   <div class="actividad">
   <select id="actividad" name="actividad" >
     <option disabled selected>Actividad deportiva  </option>

        @forelse($groups as $group)
    <option id="actividad" name="actividad" value="{{$group->id}}">{{$group->name }}</option>
         @empty
   <option>No existen actividades deportivas</option>
   @endforelse
   </select>
    </div>
   <button type="submit" class="botonPublicar"><i class="fas fa-check"></i></button>
 </div>
</form>

</article>
