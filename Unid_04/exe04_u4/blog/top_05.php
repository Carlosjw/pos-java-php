<div class="w3-card w3-margin">
    <div class="w3-container w3-padding">
        <h4>Postagens Mais Populares</h4>
    </div>
    <ul class="w3-ul w3-hoverable w3-white">
        <?php
        for ($i = 1; $i <= 5; $i++) {
            $I = $Bloco_TOP5[$i]["img"];
            $T = $Bloco_TOP5[$i]["titulo"];
            $N = $Bloco_TOP5[$i]["nComent"]; ?>
            <li class="w3-padding-16">
                <img src=<?php echo $Bloco_TOP5[$i]["img"] ?> alt="default-image"
                    class="w3-left w3-margin-right" style="width: 50px">
                <span class="w3-large"><?php echo $Bloco_TOP5[$i]["titulo"] ?></span>
                <br>
                <span>Comentários: <?php echo $Bloco_TOP5[$i]["nComent"] ?></span>
            </li>
        <?php
        }
        ?>
    </ul>
</div>