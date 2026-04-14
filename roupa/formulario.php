<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados do Card</title>


    <style>
        body{

         background-color: #c890a7c6;

        }

        h1 {
            justify-content: center;
            display: flex;
            color: #613749;
        }

        .geral {

            label {
                color: #613749;
                justify-content:center;
                display: flex;
            }

            input{
                display: block;
                margin: 0 auto;
            }

            button {
                background-color: #613749;
                color: #ffffff;
                display: block;
                margin: 0 auto;
               
            }
        }
    </style>
</head>

<body>

    <h1>Dados do seu card de roupa</h1>

    <form action="card.php" method="POST">

        <div class="geral">
            <label for="">Tipo: </label>
            <input type="text" placeholder="Informe o tipo de roupa"
                name="tipo" style="text-align: center;">

            <br><br>

            <label for="">Tamanho: </label>
            <input type="text" placeholder="Informe o tamanho da roupa"
                name="tamanho"  style="text-align: center;">

            <br><br>

            <label for="">Marca: </label>
            <input type="text" placeholder="Informe a marca"
                name="marca"  style="text-align: center;">

            <br><br>

            <label for="">Valor: </label>
            <input type="text" placeholder="Informe o valor"
                name="valor"  style="text-align: center;">

            <br><br>

            <label for="">Composição: </label>
            <input type="text" placeholder="informe o tecido da roupa"
                name="composicao"  style="text-align: center;">

            <br><br>
            
            <label for="">Cor: </label>
            <input type="color" placeholder="Escolha a cor"
            name="cor"  style="text-align: center;">
            <br><br>


            <label for="">Imagem: </label>
            <input type="text" placeholder="url da imagem"
                name="linkImagem"  style="text-align: center;">

            <br><br>




            <button>Enviar</button>
        </div>

    </form>
</body>

</html>
