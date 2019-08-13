@extends('layouts.app')

@push('styles')
<link href="{{ asset('css/logged/profileLogged.css') }}" rel="stylesheet">
@endpush

@section('content')

<!-- Esto es la portada  -->
  <div class="perfilLogueado">
<section class="portadaUsuario" 
style="background-image: url('{{ Storage::url(Auth::user()->additional->image) }}')">
<div class="infoUsuario">
  <div class="cuadrado3">
    <img id="fotoPerfil3" src="{{ Storage::url(Auth::user()->person->avatar) }}"  alt="">
  </div>
  <h3 class="user-name">{{Auth::user()->person->name }} {{Auth::user()->person->lastName }}</h3>
</div>

 @if (Auth::user()->additional->image)

  <form class="fotoPortada" action="/profile/portada" method="post" enctype="multipart/form-data">
    @csrf
    <label for="portada" class="labelAvatar">{{ __('Foto de portada') }}</label>
    <input style='display: none;' id="portada" type="file" accept="image/*" name="portada" value="{{ old('portada') }}" required autocomplete="portada" autofocus>
    <button class="botonPortada">Cambiar imagen</button>
  </form> 
  @else
    <form class="fotoPortada" action="/profile/portada" method="post" enctype="multipart/form-data">
    @csrf
    <label for="portada" class="labelAvatar">{{ __('Foto de portada') }}</label>
    <input style='display: none;' id="portada" type="file" accept="image/*" name="portada" value="{{ old('portada') }}" required autocomplete="portada" autofocus>
    <button class="botonPortada">Enviar</button>

  @endif

</section>

<div class="todoUsuario">

<section class="datosUsuario">
  <!-- Esto es para registrar los datos adicionales -->
<article class="infoGeneral">

    <h4>Datos Adicionales</h4>
   @include('partials.additional')

</article>

  <!-- Esto es para mostrar la imagen abajo -->
<article class="fotosUsuario">

    @foreach($posts as $post)
    @if (auth()->id()==$post->user_id)
      <div class="contenedorFoto">
    <img class="imgPublicacion" src="/storage/{{$post->image}}"  alt="" >
      </div>
    @endif
     @endforeach

</article>

</section>

  <!-- Esto es para agregar posts -->
<section class="posteosUsuario">
<article class="posteos">
      @include('partials.posteo')
</article>


  <!-- Esto es para ver los posts -->
<article class="posteos">
      @include('partials.perfil')
</article>
</section>
<script src="{{ asset('js/profile.js') }}" defer></script>
  </div>
@endsection
