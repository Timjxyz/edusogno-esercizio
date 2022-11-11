// const { isNumber } = require("lodash");

// const bottone = document.getElementById('bottone');
// const categoria = document.getElementById('category');

// // /REGISTRAZIONE/
// if (bottone) {

//     bottone.addEventListener('click', 
//     function() {

//         /* NOME */
//         let nome = document.getElementById('name');

//         if (nome.value.length < 5) {
              
//             nome.setCustomValidity('Il nome deve essere più lungo di 5 caratteri');
//         }else{
//             nome.setCustomValidity('');
//         }

       

//         /* EMAIL */
//         let email = document.getElementById('email');

//         if (validaEmail(email.value)) {
//             email.setCustomValidity("");
          
//         }else{
//             email.setCustomValidity("indirizzo non valido");
//         }

      

      

            
//     }
// )
// }

console.log('ciao');
      function showPwd() {
        let input = document.getElementById('pwd');
        
        if (input.type === "password") {
          input.type = "text";
        } else {
          input.type = "password";
        }
      }
