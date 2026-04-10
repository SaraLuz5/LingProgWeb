<?php

//Criar os objetos

require_once("modelo/Carta.php");

$carta1 = new Carta;
$carta1->setNaipe("Paus");
$carta1->setNome("As de");
$carta1->setLink("https://lh4.googleusercontent.com/proxy/_0uaJlFs8K1ou5Tn4wBWZQNc8e2VPiRgLy9EQxZb-GxLBhT1OU4sO5PkS1PUL-XsnDd303ptKvV8GAd_xJNxnww3HLoyjs3lr5P84zAMWKlAtVrJ5dfo9ypYH3gzX9PYnEE1PLICHdrKncfU");


$carta2 = new Carta;
$carta2->setNaipe("Copas");
$carta2->setNome("As de ");
$carta2->setLink("https://i.pinimg.com/736x/f2/4e/b5/f24eb5849b7f29cfcf824b1459599626.jpg");

$carta3 = new Carta;
$carta3->setNaipe("Espada");
$carta3->setNome("As de ");
$carta3->setLink("https://e7.pngegg.com/pngimages/902/280/png-clipart-ace-of-spades-playing-card-ace-of-hearts-spades-game-angle-thumbnail.png");


$cartas = array($carta1, $carta2, $carta3);

//sortear um dos objetos p ser o correto (rand)
$cartaCorreta = rand(1, 3);


//Receber o valor do parâmetro GET
$palipe = $_GET["palpite"];


//Verificar se a carta sorteada é igual ao palpite
if($cartaCorreta == $palipe) {
   //Mostrar que acertou
   
   echo "VOCÊ ACERTOU!!" .'<br/>';
   echo $cartas[$cartaCorreta-1]->getNome() . " ";
   echo $cartas[$cartaCorreta-1]->getNaipe() . '<br/>';
   echo "<img src='" . $cartas[$cartaCorreta-1]->getLink() . "'>";
   
   
} else {
    //Mostrar que errou
    echo "Você errou!!" . '<br/>';
    echo "<a href='index.php'>Voltar para o index</a>";


}

 
