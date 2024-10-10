<?php
$LibraryBooks = array();

$sql = "SELECT * FROM celular";
if ($searchResult = mysqli_query($conexao, $sql)) {
    while ($singleBook = mysqli_fetch_row($singleBook)) {

        $LibraryBooks[] = array(
            "img" => $singleBook[4],
            "modelo" => $singleBook[1],
            "modelo" => $singleBook[0],
            "ram" => $singleBook[2],
            "storage" => $singleBook[3]
        );
    }
}

mysqli_free_result($searchResult);
