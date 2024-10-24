function calcular() {
    let av1 = parseFloat(document.getElementById("av1").value);
    let av2 = parseFloat(document.getElementById("av2").value);
    let p1 = parseFloat(document.getElementById("p1").value);
    let p2 = parseFloat(document.getElementById("p2").value);
    let participacao = parseFloat(document.getElementById("participacao").value);
    let pf = parseFloat(document.getElementById("pf").value);

    const peso1 = 0.15;
    const peso2 = 0.20;
    const peso3 = 0.30;
    const aulas = 80;

    let pd = 1 - (pf / aulas);
    let faltas = pd * 100;

    console.log(faltas)

    let media = (av1 * peso1 + av2 * peso1 + p1 * peso2 + p2 * peso2 + participacao * peso3);

    document.getElementById("mediaf").innerText = media.toFixed(2);


    if (media < 6 && faltas >= 75) {
        document.getElementById("resultado").innerText = "Reprovado pelos dois"
    }
    else if (faltas >= 75) {
        document.getElementById("resultado").innerText = "Reprovado por falta";
    } else if (media < 6) {
        document.getElementById("resultado").innerText = "Reprovado por nota";
    }

    if (media >= 6 && faltas < 75) {
        document.getElementById("resultado").innerText = "Aprovado"
    }
}




function limpar() {
    document.getElementById("media").reset();
    document.getElementById("av1").focus();
    document.getElementById("mediaf").innerText = "";
    document.getElementById("resultado").innerText = "";
}
