
function validarForm() {
    // 1-pegar os valores dos inputs do formulário
    var titulo = document.getElementById('titulo').value;
    var genero = document.querySelector("#genero").value;
    var autor = document.getElementById('autor').value;
    var qtdPag = document.getElementById('qtdPags').value;

    //alert(titulo + " - " + genero + " - " + autor + " - " + qtdPag);

    var divMsgErro = document.querySelector("#msgErro");
    var erros = [];

    // 2-validar os dados
    if (titulo.trim() == '') {
        erros.push("Informe o título");
    }

    if (genero.trim() == '') {
        erros.push("Informe o gênero");
    }

    if (autor.trim() == '') {
        erros.push("Informe o autor");
    }

    if (qtdPag.trim() == '') {
        erros.push("Informe a quantidade de páginas");
    }

    if (erros.length > 0) {
        divMsgErro.innerHTML = erros.join("<br>");
        divMsgErro.style.display = "block";
        return false;
    }

    // 3-retornar verdadeiro pra submeter o form
    return true;
}