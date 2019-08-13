window.onload=function(){
  console.log("hola");
  let formLogin = document.getElementById('formularioLogin');
  let campoEmail = document.getElementById('email');
  let campoPassword = document.getElementById('password');
  var emailRegex = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;

  campoEmail.addEventListener('keyup', function (){
    if(this.value.length < 3 || this.value.length >10){
      this.style.borderColor = 'red';
    }
    if(!emailRegex.test(campoEmail.value)){
      this.style.borderColor = 'red';
    }else{
      this.style.borderColor = 'violet';
    }
  })

  campoPassword.addEventListener('keyup', function (){
    if(this.value == ' '){
      alert('No se pueden ingresar espacios vacios');
    }
    if(this.value.trim() == ''){
      this.style.borderColor = 'red';
    }
    if(this.value.length < 3 || this.value.length >10){
      this.style.borderColor = 'red';
    }else{
      this.style.borderColor = 'violet';
    }
  })

  var validarEmail = function(event){
    if(!emailRegex.test(campoEmail.value)){
      alert('El Email no tiene un formato valido');
      event.preventDefault();
      campoEmail.style.borderColor= 'red';
    }
  }

  var validarPassword = function(event){
    if (campoPassword.value.trim() == '') {
      alert("El campo Contraseña no puede estar vacio");
      event.preventDefault();
      campoPassword.style.borderColor='red';
      campoPasswordConfirm.style.borderColor= 'red';
    }
  }

  var validar = function(event){
    validarEmail(event);
    validarPassword(event);
  };

  formLogin.addEventListener('submit',validar);
}
