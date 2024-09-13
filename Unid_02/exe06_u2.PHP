<?php
$colegas = array(
    1 => array(
        "Nome" => "Carlos",
        "Telefone" => "99525252",
        "Endereço" => "Rua XV, 120",
        "Data Nasc" => "01/01/2000"
    ),
    2 => array(
        "Nome" => "Joana",
        "Telefone" => "99525252",
        "Endereço" => "Rua XVI, 120",
        "Data Nasc" => "01/01/2000"
    ),
    3 => array(
        "Nome" => "Marisa",
        "Telefone" => "99525252",
        "Endereço" => "Rua LXV, 120",
        "Data Nasc" => "01/01/2000"
    ),
    4 => array(
        "Nome" => "Joaquim",
        "Telefone" => "99525252",
        "Endereço" => "Rua XVIII, 120",
        "Data Nasc" => "01/01/2000"
    ),

);

echo "<b>". $colegas[4]["Nome"]."</b><br>";
echo " - Telefone: " .$colegas[4]["Telefone"] . "<br>";
echo "<b>" . $colegas[3]["Nome"] . "</b><br>";
echo " - Data de Nascimento: " .$colegas[3]["Data Nasc"]."<br>";
