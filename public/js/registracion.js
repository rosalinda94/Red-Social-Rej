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

  var emailRegex = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;



  campoName.addEventListener('keyup', function (){
    if( this.value.length < 3 || this.value.length >10){
      this.style.borderColor = 'red';
    }else{
      this.style.borderColor = 'violet';
    }
  })

  lastName.addEventListener('keyup', function (){
    if(this.value.length < 3 || this.value.length >10){
      this.style.borderColor = 'red';
    }else{
      this.style.borderColor = 'violet';
    }
  })

  campoPartner.addEventListener('click', function (){
    if(campoSex == 0 || campoSex == 1){
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
    if(this.value.trim() == ''){
      this.style.borderColor = 'red';
    }
    if(this.value.length < 3 || this.value.length >10){
      this.style.borderColor = 'red';
    }else{
      this.style.borderColor = 'violet';
    }
  })



  var validarNombre = function(event){
    if(campoName.value.trim() == ''){
      alert('El campo Nombre no puede estar vacio');
      event.preventDefault();
    } else if (campoName.value.length < 3){
      alert('Debes tener un Nombre de mas de 3 letras');
      event.preventDefault();
    }
  }

  var validarApellido = function(event){
    if(campoLastName.value.trim() == ''){
      alert('El campo Apellido no puede estar vacio');
      event.preventDefault();
    } else if (campoLastName.value.length < 3){
      alert('Debes tener un Apellido de mas de 3 letras');
      event.preventDefault();
    }
  }

  var validarPartner = function(event){
    if(campoPartner.value.trim() == ''){
      alert('El campo Nro de Socio no puede estar vacio');
      event.preventDefault();
    } else if (parseInt(campoPartner.value) != true) {
        alert('El campo Nro de Socio debe ser un número');
        event.preventDefault();
    }
  }

      var validarSelect = function(event){  //chequear esto
        if(campoSex.value == ''){
          alert('Seleccione una opcion');
          event.preventDefault();
        }
      }

      var validarEmail = function(event){  //chequear esto
        if(!emailRegex.test(campoEmail.value)){
          alert('El Email no es valido');
          event.preventDefault();
        }
      }

      var validarPassword = function(event){  //chequear esto
        if (campoPassword.value.trim() == '' || campoPasswordConfirm.value.trim() == '') {
          alert("Ninguna de las Contraseñas pueden quedar vacias");
          event.preventDefault();
        }
        if(campoPassword.value != campoPasswordConfirm.value ){
          alert('Las Contraseñas no coinciden');
          event.preventDefault();
          campoPassword.style.borderColor='red';
          campoPasswordConfirm.style.borderColor= 'red';
        }
      }



  var validar = function(event){
    validarNombre(event);
    validarApellido(event);
    validarPartner(event);
    validarSelect(event);
    validarEmail(event);
    validarPassword(event);
  };

  formRegister.addEventListener('submit',validar);
}
