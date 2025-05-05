const entrada = document.getElementById('entradaDados');
const entrada2 = document.getElementById('entradaDados2');
const botao = document.getElementById('botao');

botao.addEventListener('click', function () {

if( entrada.value % entrada2.value == 0){
const entrada = document.getElementById('entradaDados');
    saida = "<p>É multiplo</p>"
} else {
    saida = "<p>Não é multiplo</p>";
    saida += `<p> sobra de ${entrada.value % entrada2.value}</p>`;
}

document.getElementById('saidaDados').innerHTML = saida;
})