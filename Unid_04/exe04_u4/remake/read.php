<?php
$LibraryPhone = array();

$sql = "SELECT * FROM celular";
if ($searchResult = mysqli_query($conexao, $sql)) {
    while ($singlePhone = mysqli_fetch_row($singlePhone)) {

        $LibraryPhone[] = array(
            "imageUrl" => $singlePhone[4],
            "modelo" => $singlePhone[1],
            "marca" => $singlePhone[0],
            "ram" => $singlePhone[2],
            "armazenamento" => $singlePhone[3]
        );
    }
}

mysqli_free_result($searchResult);
