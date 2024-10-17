<!DOCTYPE html>
<html lang="pt-BR">
<?php
include("head.php");
?>
<body>
    <div class="container" style="width: 250px">
        <div class="main-title">
            <h4>CALCULA METRAGEM</h4>
        </div>
        <form action="#" method="post">
            <label for="first-value">
                Altura
                <input type="number" name="first-value" id="first-value" class="w3-input w3-border w3-light-grey" required>
            </label>
            <label for="second-value">
                Largura
                <input type="number" name="second-value" id="second-value" class="w3-input w3-border w3-light-grey" required>
            </label>
            <label for="third-value">
                Profundidade
                <input type="number" name="third-value" id="third-value" class="w3-input w3-border w3-light-grey" required>
            </label>
            <label for="result">
                Resultado
                <span class="w3-input w3-border w3-light-grey" id="result">
                    <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $first_value = $_POST['first-value'];
                        $second_value = $_POST['second-value'];
                        $third_value = $_POST['third-value'];
                        $result = $first_value + $second_value + $third_value;
                        echo htmlspecialchars($result);
                    }
                    ?>
                </span>
            </label>
            <div class="buttons">
                <button type="submit" class="btn">CALCULAR</button>
                <button type="reset" class="btn">CANCELAR</button>
            </div>
        </form>
    </div>
</body>
</html>
