<?php

require_once("modelo/link.php");
echo '<link rel="stylesheet" href= "botao_imagem.css">';


function desenhaBotao(array $botao, string $nome)
{
    echo '<div class="dropdown">
    <button class = "dropbtn"> ' . $nome . '</button>
    <div class="dropText">';
    foreach ($botao as $b) {
     echo '<span><img src="'. $b->getLinkImg() .'" width="20" heigth="20">'. $b->getInfo() .'</span>';   
    }
    echo ' </div>
     </div>';
}

$timao = new Link("https://a.espncdn.com/combiner/i?img=/i/teamlogos/soccer/500/874.png", "Corinthians");
$inter = new Link("https://a.espncdn.com/combiner/i?img=/i/teamlogos/soccer/500/1936.png", "Internacional");
$fla = new Link("https://a.espncdn.com/combiner/i?img=/i/teamlogos/soccer/500/819.png", "Flamengo");
$times = array($fla, $inter, $timao);

desenhaBotao($times, "times");

$acdc = new Link("https://1884403144.rsc.cdn77.org/foto/ac-dc-rock-kapela/ODAweDQxOC9maWx0ZXJzOm5vX3Vwc2NhbGUoMSk6d2F0ZXJtYXJrKGh0dHBzOi8vaW1nLmNuY2VudGVyLmN6L2Rpc3QvYXNzZXRzL3JlZmxleC93YXRlcm1hcmstcmVmbGV4LnBuZywtMTAsMTAsMCkvaW1n/2623825.jpg?v=0&st=b4rie07wf4J9UZEi22pmS1kiHNYVCTRMfOdwlHJfwo4&ts=1600812000&e=0", "AC/DC");
$guns = new Link("https://uploads.tenhomaisdiscosqueamigos.com/2020/07/Guns-N-Roses-Appetite-For-Destruction.jpg", "Guns n' Roses");
$red = new Link("https://static.decorepronto.com.br/public/decorepronto/imagens/produtos/gravura-para-quadros-logo-da-banda-red-hot-chili-peppers-60x90cm-31375.jpg","Red Hot Chili Peppers Banda");
$bandas = array($acdc,$guns,$red);

desenhaBotao($bandas , "bandas");

$monica = new Link("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS_IiaZpyXVkIMehMzquF1AD1hpUNMrl-yESg&s","Mônica");
$magali = new Link("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ3mToQgc_ty7sx8LwvRwkkqdG_PP-zETSyuQ&s","Magali");
$cebolinha = new Link("https://recreio.com.br/wp-content/uploads/animacoes/cebolinhaaaa_capa.jpg", "Cebolinha");
$turma = array($cebolinha,$magali,$monica);

desenhaBotao($turma , "turma");

$barbie = new Link("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQWDK22QXfnTjCYDVqy2keaCPgjPmt3Gr29eg&s","Barbie");
$ken = new Link("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSa968D8YMv05YhMbxP5FgCzrDX6JdwHZ4PJQ&s","Ken");
$raquelle = new Link("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRw7C91QPzbMayHX9YKoe6xxsFk6w79cQ16Pw&s","Raquelle");
$dreamhouse = array($barbie,$ken,$raquelle);

desenhaBotao($dreamhouse, "dreamhouse");