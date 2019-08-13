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

  campoEliminar.addEventListener("click", function(){
    var mensaje = confirm('Desea eleminar la publicacion?');
    if (mensaje == true){
      alert('Publicacion eliminada');
    } else{
      redirect('/index');  // VER ESTO
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
