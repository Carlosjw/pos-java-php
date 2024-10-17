<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_value = $_POST['first-value'];
    $second_value = $_POST['second-value'];
    $thirt_value = $_POST['thirt-value'];

    $result = $first_value + $second_value + $thirt_value;
}
?>
