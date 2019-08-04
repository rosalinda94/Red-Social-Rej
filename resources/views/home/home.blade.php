@extends('layouts.app')

@section('content')

  <body class="body">

    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
    <div class="home-logueado">
    <section class="aside">
      <article class="profile-aside">
         <a href="profile.php">
          <img src="storage\{{ Auth::user()->person->avatar }}"  alt="" width="100px">
        </a>

        <!-- poner el nombre del usuario -->
        <a class="profile-picture" href="profile.php"><h3 class="user-name"> {{Auth::user()->name }} <span class="caret"></span></h3></a>
      </article>

      <article class="Listado-completo">
        @yield('nosotros')
      </article>
    </section>

<!-- inicio home principal -->

    <section class="principal">
      <article class="publicar">
        <div class="que-pensas">
          <a class="profile-picture" href="profile.php"><img src="img/foto-perfil.jpg" alt=""></a>
          <textarea name="name" rows="1" cols="70" class="comentario" placeholder="¿Qué estas pensando...?"></textarea>
        </div>
        <div class="que-publicar">
          <label for="file-upload" class="custom-file-upload" style="width:120px;">
            <i class="fa fa-cloud-upload"></i> Foto / video
          </label>
          <input id="file-upload" type="file"/>
          <button style="width:120px;">Etiquetar</button>
          <input type="text" name="" value="">
          <select class="sentimiento-select" name="Sentimiento" style="width:120px;">
            <option disabled selected>Sentimiento</option>
            <option value="fel">Feliz</option>
            <option value="tr">Triste</option>
            <option value="ag">Agradecido</option>
            <option value="en">Enamorado</option>
            <option value="loc">Loco</option>
            <option value="gen">Genial</option>
            <option value="rel">Relajado</option>
            <option value="eno">Enojado</option>
          </select>
          <button type="submit" name="ok"><i class="fas fa-check"></i></button>
        </div>
      </article>
      <article class="publicacion">
        <div class="">
          <a class="profile-picture" href="profile.php"><img src="img/foto-perfil.jpg" alt=""></a>
          <!-- poner el nombre del usuario -->
          <p>Maria Juana Perez</p>
          <p>horario</p>
        </div>
        <div class="publicacion-user">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
        <div class="publicacion-imagenes">
          <img src="img/img1.png" alt="">
          <img src="img/img1.png" alt="">
          <img src="img/img1.png" alt="">
          <img src="img/img1.png" alt="">
        </div>
        <div class="publicacion-reaccion">
          <ul>
            <li>personas que le gusta</li>
            <li>x comentarios</li>
          </ul>
        </div>
        <div class="publicacion-reaccionar">
          <ul>
            <li>Me gusta</li>
            <li>Comentar</li>
          </ul>
        </div>
        <div class="publicacion-comentarios">
          <a class="profile-picture" href="profile.php"><img src="img/foto-perfil.jpg" alt=""></a>
          <div class="">
            <h5>nombre usuario</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et</p>
            <ul>
              <li>Me gusta</li>
              <li>Responder</li>
              <li>fecha/hora</li>
            </ul>
          </div>
        </div>
        <textarea name="name" rows="2" cols="70" placeholder="Escribí aca tu comentario..."></textarea>
        <button type="submit" name="ok">1</button>
      </article>
    </section>

    <section class="aside2">
      <article class="publicidad">
        publicidad
      </article>
      <article class="calendario">
        calendario
      </article>
    </section>
    </div>
  </body>

@endsection
