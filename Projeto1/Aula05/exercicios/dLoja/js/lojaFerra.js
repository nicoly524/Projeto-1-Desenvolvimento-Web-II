const entrada = document.getElementById('entradaDados');
const entrada2 = document.getElementById('entradaDados2');
const entrada3 = document.getElementById('entradaDados3');
const entrada4 = document.getElementById('entradaDados4');
const botao = document.getElementById('botao');
const parafuso = 1.50
const arruela = 2.00
const porca = 2.50
let saida = '';

botao.addEventListener('click', function(){
    let nome = entrada.value
    let compparaf = Number(entrada2.value)
    let comparru = Number(entrada3.value)
    let compporc = Number(entrada4.value)

    let notapa = compparaf * parafuso
    let notaar = comparru * arruela
    let notapo = compporc * porca

    saida= `<hr>
            <p>Itens Comprados:</p><br>
            <p>Parafuso: R$${notapa}</p><br>
            <p>Arruela: R$${notaar}</p><br>
            <p>Porca: R$${notapo}</p><hr>
            <p>Vendedor: Loja de Ferramentas</p>
            <p>Comprador: ${nome}</p>`

    document.getElementById('saidaDados').innerHTML = saida
})
