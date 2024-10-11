<div class="w3-container w3-padding w3-dark-grey w3-text-white" style="width: 768px; margin-top: 20px;">
    <h4>LIVROS PARA A VIDA TODA</h4>
</div>
<div class="w3-margin main-container">
    <ul class="main-list">
        <?php

        for ($full_lenght = 0; $full_lenght < count($Biblioteca_SQL); $full_lenght++) {
            $A = $Biblioteca_SQL[$full_lenght]["img"];
            $B = $Biblioteca_SQL[$full_lenght]["title"];
            $C = $Biblioteca_SQL[$full_lenght]["author"];
            $D = $Biblioteca_SQL[$full_lenght]["genre"];
            $E = $Biblioteca_SQL[$full_lenght]["pages"];
            $F = $Biblioteca_SQL[$full_lenght]["year"];
            $G = $Biblioteca_SQL[$full_lenght]["sinopse"];
            $H = $Biblioteca_SQL[$full_lenght]["linkcompra"];
        ?>
            <li class="w3-light-grey w3-card" style="margin-bottom: 10px">
                <a href=<?php echo $H ?> target="_blank">
                    <img src=<?php echo $A ?> alt="default-image" class="w3-left w3-margin-right" style="width: 100px; margin-bottom: 10px">
                </a>
                <span class="w3-xlarge"><b><?php echo $B ?></b></span>
                <br>
                <span><b>Autor:</b> <?php echo $C ?></span><br>
                <span><b>Gênero:</b> <?php echo $D ?></span><br>
                <span><b>Páginas:</b> <?php echo $E ?></span><br>
                <span><b>Ano:</b> <?php echo $F ?></span><br><br>
                <button type="button" class="collapsible">Sinopse:</button>

                <div class="content w3-card">
                    <p class="w3-padding" style="text-align:justify; text-indent:2em">
                        <?php echo $G ?>
                    </p>
                </div>
            </li>

        <?php
        }
        ?>
    </ul>
</div>