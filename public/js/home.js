window.onload=function(){
  let formPosteo = document.getElementById('formularioPosteo');
  let campoAvatar = document.getElementById('avatar');
  let campoPublicacion = document.getElementById('publicacion');
  let campoCategoria = document.querySelector('.selectActividad');
  let campoEliminar = document.getElementById('eliminar');

  campoAvatar.addEventListener("change", function(){
    var extensiones = /(.jpg|.jpeg|.png)$/i;
    if(!extensiones.exec(campoAvatar.value)){
      alert('Se aceptan las siguientes extensiones: .jpg, .jpeg, .png');
      campoAvatar.value='';
    }
  })

  campoEliminar.addEventListener("click", function(e){
    var mensaje = confirm('Desea eleminar la publicacion?');

    if (mensaje){
      alert('Publicacion eliminada');
    } else {
      e.preventDefault();
    }

  })

  var validarPublicacion = function(event){
    if(campoPublicacion.value == ''){
      alert('La publicacion no puede estar vacia');
      event.preventDefault();
    }
  }

  // var validarSelect = function(event){
  //   if(campoCategoria.value == ''){
  //     alert('Indique una categoria');
  //     event.preventDefault();
  //   }
  // }

  var validar = function(event){
    validarPublicacion(event);
    // validarSelect(event);
  }

  formPosteo.addEventListener('submit',validar);
}
