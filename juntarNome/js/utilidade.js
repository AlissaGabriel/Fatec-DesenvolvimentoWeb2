function juntarNome() {
    let nome = document.getElementById("nome").value;
    let sobrenome = document.getElementById("sobrenome").value;
    document.getElementById("nomecompleto").innerHTML = "<strong>" + nome + " " + sobrenome + "<strong>";
    mostrarLog(nome, sobrenome);
    ajustarFoco();
}

function limparNome() {
    document.getElementById("nomes").reset();
    document.getElementById("nomecompleto").innerText = "";
    document.getElementById("nome").focus();
}

function mostrarLog(n, s) {
    console.log("Nome: " + n);
    console.log("Sobrenome: " + s);
    console.log("Nome Completo: " + n + "" + s);
}

function ajustarFoco() {
    document.getElementById("nome").focus();
}


function escreverNomeCompleto() {
    let nome = document.getElementById("nome").value;
    let sobrenome = document.getElementById("sobrenome").value;
    let resultado = alert('Enquanto não fechar esta janela, não sera mostrado o nome completo');
    resultado = "<strong>" + nome + " " + sobrenome + "<strong>" + "<button id= 'voltar' onclick='location.reload()'>Voltar</button>";
    contar();
    document.writeln(resultado);
    mostrarLog(nome, sobrenome);
    ajustarFoco();
}

function contar() {
    for (i = 0; i <= 5; i++) {
        document.writeln('Contagem: ' + i + "<br>");
    }
}