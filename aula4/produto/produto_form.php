<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro do Produto</title>
</head>

<body>

    <h1>Cadastro do Produto</h1>

    <form action="produto_exec.php" method="POST">

        <label for="">Descrição: </label>
        <input type="text" placeholder="Descrição do produto"
            name="descricao">

        <br><br>

        <label for="">Tipo: </label>
        <input type="text" placeholder="Informe o tipo"
            name="tipo">

        <br><br>

        <label for="">Marca: </label>
        <input type="text" placeholder="Informe a marca"
            name="marca">

        <br><br>

        <label for="">Valor: </label>
        <input type="text" placeholder="Informe o valor"
            name="valor">

        <br><br>

          <label for="">detalhe do produto: </label>
        <input type="text" placeholder="mais detalhes"
            name="descDetalhada">

        <br><br>



        <label for="">Imagem: </label>
        <input type="text" placeholder="Imagem"
            name="linkImagem">

        <br><br>




        <button>Enviar</button>

    </form> 
</body>
</html>