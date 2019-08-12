@extends('layouts.app')

@push('styles')
<link href="{{ asset('css/logged/profileLogged.css') }}" rel="stylesheet">
@endpush

@section('content')
  <div class="perfilLogueado">
<section class="portadaUsuario">
<div class="infoUsuario">
  <div class="cuadrado4">
    <img id="fotoPerfil4" src="{{ Storage::url(Auth::user()->person->avatar) }}"  alt="">
  </div>
  <h3 class="user-name">{{Auth::user()->person->name }} {{Auth::user()->person->lastName }}</h3>
</div>
  <form class="fotoPortada" action="index" method="post" enctype="multipart/form-data">
    <label for="avatar" class="labelAvatar">{{ __('Foto de portada') }}</label>
    <input style='display: none;' id="avatar" type="file" class=" @error('avatar') is-invalid @enderror" accept="image/*" name="avatar" value="{{ old('avatar') }}" required autocomplete="avatar" autofocus>
  </form>
</section>

<section class="datosUsuario">
<article class="infoGeneral">
   @include('partials.register')
</article>
<article class="fotosUsuario">
  <img src="storage\{{ Auth::user()->person->avatar }}" alt="" width="100px">
</article>

</section>
<section class="posteosUsuario">
<article class="posteos">

      @include('partials.posteo')

</article>
<article class="posteos">
      @include('partials.perfil')
</article>
</section>
  </div>
@endsection
