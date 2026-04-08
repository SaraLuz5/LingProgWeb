<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados do Card</title>
</head>

<body>

    <h1>Dados do seu card de roupa</h1>

    <form action="card.php" method="POST">

        <label for="">Tipo: </label>
        <input type="text" placeholder="Informe o tipo de roupa"
            name="tipo">

        <br><br>

        <label for="">Tamanho: </label>
        <input type="text" placeholder="Informe o tamanho da roupa"
            name="tamanho">

        <br><br>

        <label for="">Marca: </label>
        <input type="text" placeholder="Informe a marca"
            name="marca">

        <br><br>

        <label for="">Valor: </label>
        <input type="text" placeholder="Informe o valor"
            name="valor">

        <br><br>

          <label for="">Composição: </label>
        <input type="text" placeholder="informe o tecido da roupa"
            name="composicao">

        <br><br>


        <label for="">Imagem: </label>
        <input type="text" placeholder="Imagem"
            name="linkImagem">

        <br><br>




        <button>Enviar</button>

    </form> 
</body>
</html>