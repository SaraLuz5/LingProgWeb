
function validarForm() {
    // 1-pegar os valores dos inputs do formulário
    var nome = document.getElementById('nome').value;
    var CPF = document.getElementById('CPF').value;
    var genero = document.querySelector("#genero").value;
    var especialidade = document.getElementById("#especialidade").value;
    var CRM = document.querySelector('CRM').value;

    var divMsgErro = document.querySelector("#msgErro");
    var erros = [];

    // 2-validar os dados
    if (nome.trim() == '') {
        erros.push("Informe o nome");
    }

    if (CPF.trim() == '') {
        erros.push("Informe o CPF");
    }

    if (genero.trim() == '') {
        erros.push("Informe o gênero");
    }

    if (setor.trim() == '') {
        erros.push("Informe a especialidade");
    }
    
    if (carga.trim() == '') {
        erros.push("Informe o CRM");
    }

    if (erros.length > 0) {
        divMsgErro.innerHTML = erros.join("<br>");
        divMsgErro.style.display = "block";
        return false;
    }

    // 3-retornar verdadeiro pra submeter o form
    return true;
}