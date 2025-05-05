const entrada = document.getElementById('entradaDados');
const botao = document.getElementById('botao');

botao.addEventListener('click', function () {
    compara = Number(entrada.value)
    
    if (compara >= 0 && compara <= 10){

        sorteio = Math.floor(Math.random() * 11);;

        if (compara == sorteio) {
            saida = '<p>Parabéns você foi sorteado e ganhou um grande nada, PARABENIS</p>'
        } else {
            saida = '<p>Perdeste, que pena, pra você.</p>'
        }
    }else { saida = '<p>Tadinho, não sabe ler.</p>'}


    document.getElementById('saidaDados').innerHTML = saida;
})