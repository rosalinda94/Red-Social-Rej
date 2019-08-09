<article class="publicar">
  <form class="" action="index" method="post" enctype="multipart/form-data">
    @csrf

 <div class="que-pensas">
   <a class="profile-picture" href="profile/profile"><img src="storage\{{ Auth::user()->person->avatar }}"  alt="" width="50px"></a>
   <textarea name="body" rows="1" cols="70" class="comentario" placeholder="Que quieres escribir hoy?   {{Auth::user()->name }}"></textarea>
 </div>
 <div class="que-publicar">
   <div class="form-group row">
       <label for="avatar" class="col-md-4 col-form-label text-md-right">{{ __('Foto de perfil') }}</label>

       <div class="col-md-6">
           <input style="color:transparent" id="avatar" type="file" class=" @error('avatar') is-invalid @enderror" accept="image/*" name="avatar" value="{{ old('avatar') }}" required autocomplete="avatar" autofocus>

           @error('avatar')
               <span class="invalid-feedback" role="alert">
                   <strong>{{ $message }}</strong>
               </span>
           @enderror
       </div>
   </div>

   <select class="btn btn-outline-secondary" id="etiqueta" name="etiqueta"  >
     <option disabled selected>Etiquetar a </option>
     @forelse($users as $user)
     <option id="etiqueta" name="etiqueta"  value="{{$user->id}}"> {{$user->name }}</option>
         @empty
   <option>no hay amigos</option>
   @endforelse

   </select>
   <select class="btn btn-outline-secondary" id="actividad" name="actividad" >
     <option disabled selected>Actividad deportiva  </option>

        @forelse($groups as $group)
    <option id="actividad" name="actividad" value="{{$group->id}}">{{$group->name }}</option>
         @empty
   <option>No existen actividades deportivas</option>
   @endforelse

   </select>
   <button type="submit" class="btn btn-outline-secondary">Publicar</button>
 </div>
</form>

</article>
