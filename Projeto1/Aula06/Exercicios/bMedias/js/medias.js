const entrada = document.getElementById('entradaDados');
const botao = document.getElementById('botao');

let mediazinhas = [];
let domeio = 0;
let isGT = [];

botao.addEventListener('click', function () {
    mediazinhas.push(Number(entrada.value));
    entrada.value = 0
    
    domeio = 0
    for (let i = 0; i < mediazinhas.length; i++) {
        domeio += mediazinhas[i];
    }

    let mediazona = domeio/mediazinhas.length;

    for(let i = 0; i < mediazinhas.length; i++){
        if (mediazinhas[i] < mediazona) {
            isGT[i] = `Média parcial ${i+1} é menor que a média geral`
        } else {
            isGT[i] = `Média parcial ${i+1} é maior que a média geral`
        }
    }

    let saida= `<p>Sua média foi ${mediazona}</p><br>`
    
    mediazinhas.forEach((mediamin, i)  => {
        saida += `<p>${isGT[i]}</p>
                        <p>${mediamin}</p>
                        <br>`
    });
                        
    document.getElementById('saidaDados').innerHTML = saida
})