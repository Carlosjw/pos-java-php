<?php
include("conection.php");

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $image = $_POST['main-image'];
    $marca = $_POST['marca'];
    $model = $_POST['model'];
    $memoRam = $_POST['memo-ram'];
    $storage = $_POST['storage'];

    $sql = "INSERT INTO ";

}
?>