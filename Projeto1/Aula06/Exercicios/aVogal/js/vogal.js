let condicao = ["A", "e", "I", "o", "U"];
let isVogal = "Sua letra é uma vogal";
let isConsoante = "Sua letra não é uma vogal";

/* Sniped */
const entrada = document.getElementById('entradaDados');
const saida = document.getElementById('saidaDados');
let action = false;
let actionType = 0;

entrada.addEventListener('input', function(){ 

for (let i = 0; i < condicao.length; i++) {
    
    /* change to case */
    if (entrada.value == "") {
        action = false

    }else{
        action = true

        if(entrada.value.toUpperCase() == condicao[i].toUpperCase()){
            actionType = 1;
            break
        }else{
            actionType = 2;
        };
    }
};
/*  */

if(action == true){

    switch (actionType) {
        case 1:
            
            saida.innerHTML = isVogal;
            break;
        
        case 2:

            saida.innerHTML = isConsoante;
            break;

        default:
            break;
            
        }
} else {
    saida.innerHTML = '';
}
 console.log(saida.innerHTML)
document.getElementById('saidaDados').innerHTML = saida.innerHTML
console.log(entrada.value)})