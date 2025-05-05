const entrada = document.getElementById('entradaDados');
let saida = ''

entrada.addEventListener('input', function(){
let idade = Number(entrada.value);

if (idade < 18){
    saida = '<p>Você é menor de idade</p>';
} else if (idade >= 18){ saida = '<p>Você é maior de idade</p>';}else if (idade = null) {
    saida = '<p></p>'
}

document.getElementById('saidaDados').innerHTML = saida
})