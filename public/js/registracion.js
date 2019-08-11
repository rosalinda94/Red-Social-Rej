window.onload=function(){
  let formRegister = document.getElementById('formularioRegistro');
  let campoName = document.getElementById('name');
  let campoLastName = document.getElementById('lastName');
  let campoPartner = document.getElementById('partner');
  let campoSex = document.getElementById('sex');
  let campoEmail = document.getElementById('email');
  let campoPassword = document.getElementById('password');
  let campoPasswordConfirm = document.getElementById('password-confirm');
  let btn = document.getElementById('submit');


  var validarNombre = function(event){
    if(campoName.value.trim() == ''){
      alert('El campo nombre no puede estar vacio');
      event.preventDefault();
    } else if (campoName.value.length < 4){
      alert('Debes tener un nombre de mas de 4 letras');
      event.preventDefault();
    }
  }
  // var validarApellido = function(event){
  //   if(campoLastName.value.trim() == ''){
  //     alert('El campo apellido no puede estar vacio');
  //     event.preventDefault();
  //   } else if (campoLastName.value.length < 4){
  //     alert('Debes tener un nombre de mas de 4 letras');
  //     event.preventDefault();
  //   }
  // }

  // formRegister.onsubmit()= function(event){ // ver porque no me captura el submit
  //   if(campoName.value.trim() == ''){
  //     alert('El campo nombre es obligatorio');
  //     event.preventDefault();
  //   }
  // }
  var validar = function(event){
    validarNombre(event);
    validarApellido(event);

  };

  formRegister.addEventListener('submit',validar);
}
