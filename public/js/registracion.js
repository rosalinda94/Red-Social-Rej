
window.onload=function(){
  let formRegister = document.querySelector('.formRegistro');
  let campoName = document.querySelector('input[name=name]');
  let campoLastName = document.querySelector('input[name=lastName]');
  let campoPartner = document.querySelector('input[name=partner]');
  let campoSex = document.querySelector('input[name=sex]');
  let campoEmail = document.querySelector('input[name=email]');
  let campoPassword = document.querySelector('input[name=password]');
  let campoPasswordConfirm = document.querySelector('input[name=password-confirm]');


  campoName.onblur=function(){
    console.log('Hiciste foco en el campo nombre');

    // if(this.value.trim() == ''){
    //   alert('El campo nombre no puede estar vacio');
    // } else if (this.value.length > 4){
    //   alert('Debes tener un nombre de mas de 4 letras');
    // }
  }
}




// formRegister.onsubmit()= function (event){
//   if(campoName.value.trim() == ''){
//     alert('El campo nombre es obligatorio');
//     event.preventDefault();
//   }
//}
