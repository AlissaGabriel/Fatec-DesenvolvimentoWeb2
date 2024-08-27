/* Calculadora em js */

/*Função Somar */

function somar() {
    let valor1 = parseFloat(document.getElementById("valor1").value);
    let valor2 = parseFloat(document.getElementById("valor2").value);
    let soma = valor1 + valor2;
    document.getElementById("resultado").innerText = soma;
}

/*Função subtrair */

function subtrair() {
    let valor1 = parseFloat(document.getElementById("valor1").value);
    let valor2 = parseFloat(document.getElementById("valor2").value);
    let subtrair = valor1 - valor2;
    document.getElementById("resultado").innerText = subtrair;
}

/*Função multiplicar */

function multiplicar() {
    let valor1 = parseFloat(document.getElementById("valor1").value);
    let valor2 = parseFloat(document.getElementById("valor2").value);
    let multiplicar = valor1 * valor2;
    document.getElementById("resultado").innerText = multiplicar;
}

/*Função dividir */

function dividir() {
    let valor1 = parseFloat(document.getElementById("valor1").value);
    let valor2 = parseFloat(document.getElementById("valor2").value);
    let dividir = 0;

    if (valor2 == 0) {
        alert("0 não é valido!");
        document.getElementById("valor2").focus();
    } else{
        dividir = valor1 / valor2;
        document.getElementById("resultado").innerText = dividir;
    }
}