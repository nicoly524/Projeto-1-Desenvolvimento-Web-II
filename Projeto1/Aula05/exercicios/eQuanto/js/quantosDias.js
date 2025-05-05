const entrada = document.getElementById("entradaDados");
const botao = document.getElementById("botao");
let saida = "";

botao.addEventListener("click", function () {
  let anoAtual = Number(entrada.value);
  let qtdBi = Math.floor(anoAtual / 4);

  let diasDesde01 = (anoAtual - 1) * 365 + qtdBi;

  saida = `Já se passaram ${diasDesde01} dias desde 01/01/0001`;

  document.getElementById('saidaDados').innerHTML = saida
});
