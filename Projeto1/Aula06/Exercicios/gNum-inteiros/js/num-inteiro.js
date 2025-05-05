const entrada = document.getElementById('entradaDados');
let saida = ''

entrada.addEventListener('input', function(){
let grandnumber = entrada.value
            
    if(grandnumber > 0)
    { 
        saida = '<br><p>O número é positivo</p>'
    }
    else if(grandnumber < 0)
    { 
        saida = '<br><p>O número é negativo</p>'
    }
    else
    {
        saida = '<br><p>O número é igual a zero</p>'
    }

    document.getElementById('saidaDados').innerHTML = saida
})