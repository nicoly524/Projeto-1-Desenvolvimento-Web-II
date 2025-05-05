const entrada = document.getElementById('entradaDados');
const entrada2 = document.getElementById('entradaDados2');
const entrada3 = document.getElementById('entradaDados3');
const entrada4 = document.getElementById('entradaDados4');
let saida = ''

const botao = document.getElementById('botao');


botao.addEventListener('click', function() {
    let nome = entrada.value
    let notas = []
    let sum = 0
    let saidanotas = ''

    notas.push(Number(entrada2.value))
    notas.push(Number(entrada3.value))
    notas.push(Number(entrada4.value))

    for (let i = 0; i < 3; i++) {

        if (notas[i] == "") {
            notas[i] == 0
        }
        
        saidanotas += `<p>nota${i+1} = ${notas[i]}</p><br>`
        sum += notas[i]
    }

    let media = sum / 3
    
    if (media >= 6) {
        saida = `<br><p>Parabéns, ${nome} passou!</p><br>`
    } else {
        saida = `<br><p>Infelizmente, ${nome} não passou.</p><br>`
    }

    saida += `${saidanotas}`
    saida += `<p>Média = ${media}</p>`

    document.getElementById('saidaDados').innerHTML = saida
})