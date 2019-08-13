window.onload=function(){
  let formRegister = document.getElementById('formularioRegistro');
  let campoName = document.getElementById('name');
  let campoLastName = document.getElementById('lastName');
  let campoPartner = document.getElementById('partner');
  let campoSex = document.getElementById('sex');
  let campoEmail = document.getElementById('email');
  let campoPassword = document.getElementById('password');
  let campoPasswordConfirm = document.getElementById('password-confirm');
  let campoAvatar = document.getElementById('avatar');

  var emailRegex = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;


  campoName.addEventListener('keyup', function (){
    if(this.value == ' '){
      alert('No se pueden ingresar espacios vacios');
    }
    if( this.value.length < 3 || this.value.length > 10){
      this.style.borderColor = 'red';
    }else{
      this.style.borderColor = 'violet';
    }
  })

  lastName.addEventListener('keyup', function (){
    if(this.value == ' '){
      alert('No se pueden ingresar espacios vacios');
    }
    if(this.value.length < 3 || this.value.length >10){
      this.style.borderColor = 'red';
    }else{
      this.style.borderColor = 'violet';
    }
  })

  campoPartner.addEventListener('keyup', function (){
    if(this.value == ' '){
      alert('No se pueden ingresar espacios vacios');
    }

    if(isNaN(campoPartner.value) != false){    //Controlar esto
      this.style.borderColor = 'red';

    } else if (campoPartner.value.length >=1){
      this.style.borderColor = 'violet';
    }
    if(this.value.length >10){
      this.style.borderColor = 'red';
    }
  })

  campoSex.addEventListener('click', function (){
    if(this.value == 0 || this.value == 1){
      this.style.borderColor = 'violet';
    }
  })


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

  campoPasswordConfirm.addEventListener('keyup', function (){
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

  campoAvatar.addEventListener("change", function(){
    var extensiones = /(.jpg|.jpeg|.png)$/i;
    if(!extensiones.exec(campoAvatar.value)){
      alert('Se aceptan las siguientes extensiones: .jpg, .jpeg, .png');
      campoAvatar.value='';
    }
  })


  var validarNombre = function(event){
    if(campoName.value.trim() == ''){
      alert('El campo Nombre no puede estar vacio');
      event.preventDefault();
      campoName.style.borderColor= 'red';
    } else if (campoName.value.length < 3){
      alert('Debes tener un Nombre de mas de 3 letras');
      event.preventDefault();
      campoName.style.borderColor= 'red';
    }
  }

  var validarApellido = function(event){
    if(campoLastName.value.trim() == ''){
      alert('El campo Apellido no puede estar vacio');
      event.preventDefault();
      campoLastName.style.borderColor= 'red';
    } else if (campoLastName.value.length < 3){
      alert('Debes tener un Apellido de mas de 3 letras');
      event.preventDefault();
      campoLastName.style.borderColor= 'red';
    }
  }

  var validarPartner = function(event){
    if(campoPartner.value.trim() == ''){
      alert('El campo Nro de Socio no puede estar vacio');
      event.preventDefault();
      campoPartner.style.borderColor= 'red';
    } else if (parseInt(campoPartner.value)!= true) {
        alert('El campo Nro de Socio debe ser un número');
        event.preventDefault();
        campoPartner.style.borderColor= 'red';
    }
  }

      var validarSelect = function(event){
        if(campoSex.value != 0 && campoSex.value !=1){
          alert('Indique su genero');
          event.preventDefault();
          campoSex.style.borderColor='red';
        }
      }

      var validarEmail = function(event){  //chequear esto
        if(!emailRegex.test(campoEmail.value)){
          alert('El Email no es valido');
          event.preventDefault();
          campoEmail.style.borderColor= 'red';
        }
      }

      var validarPassword = function(event){
        if (campoPassword.value.trim() == '' || campoPasswordConfirm.value.trim() == '') {
          alert("Ninguna de las Contraseñas pueden quedar vacias");
          event.preventDefault();
          campoPassword.style.borderColor='red';
          campoPasswordConfirm.style.borderColor= 'red';
        }

        if(campoPassword.value != campoPasswordConfirm.value ){
          alert('Las Contraseñas no coinciden');
          event.preventDefault();
          campoPassword.style.borderColor='red';
          campoPasswordConfirm.style.borderColor= 'red';
        }
      }

      var validarAvatar = function(event){
        if (campoAvatar.value == '') {
          alert("Adjunte una imagen como su Avatar");
          event.preventDefault();
        }
      }


  var validar = function(event){
    validarNombre(event);
    validarApellido(event);
    validarPartner(event);
    validarSelect(event);
    validarEmail(event);
    validarPassword(event);
    validarAvatar(event);
  };

  formRegister.addEventListener('submit',validar);
}
