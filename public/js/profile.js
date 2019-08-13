window.onload=function(){
  let formPosteo = document.getElementById('formularioPosteo');
  let campoAvatar = document.getElementById('avatar');
  let campoPublicacion = document.getElementById('publicacion');
  let campoEliminar = document.getElementById('eliminar');
  let comentarioEliminar = document.getElementById('eliminarComentario');

  campoAvatar.addEventListener("change", function(){
    var extensiones = /(.jpg|.jpeg|.png)$/i;
    if(!extensiones.exec(campoAvatar.value)){
      alert('Se aceptan las siguientes extensiones: .jpg, .jpeg, .png');
      campoAvatar.value='';
    }
  })

  campoEliminar.addEventListener("click", function(e){
    var mensaje = confirm('Desea eliminar la publicacion?');

    if (mensaje){
      alert('Publicacion eliminada');
    } else {
      e.preventDefault();
    }

  })

  eliminarComentario.addEventListener("click", function(e){
    var mensaje = confirm('Desea eliminar el comentario?');
    if (mensaje){
      alert('Comentario eliminado ');
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

  var validar = function(event){
    validarPublicacion(event);
  }

  formPosteo.addEventListener('submit',validar);
}
