<?php
$contador = 0;
while ($contador  < count($Postagens_Principais)) {
    $S = $Postagens_Principais[$contador]["nPostagem"];
    $T = $Postagens_Principais[$contador]["img"];
    $U = $Postagens_Principais[$contador]["tittle"];
    $V = $Postagens_Principais[$contador]["date"];
    $W = $Postagens_Principais[$contador]["description"];
    $X = $Postagens_Principais[$contador]["comments"]
?>
    <div class="w3-card-4 w3-margin w3-white">
        <img src=<?php echo $Postagens_Principais[$contador]["img"] ?> alt="random-image" style="width: 100%">
        <div class="w3-container">
            <h3>
                <p>0<?php echo $Postagens_Principais[$contador]["nPostagem"] ?> - GAMES</p>
            </h3>
            <h5><?php echo $Postagens_Principais[$contador]["tittle"] ?>, <span class="w3-opacity"><?php echo $Postagens_Principais[$contador]["date"] ?></span></h5>
        </div>
        <div class="w3-container">
            <p>
                <?php echo $Postagens_Principais[$contador]["description"] ?>
            </p>
            <div class="w3-row">
                <div class="w3-col">

                </div>
                <div class="w3-col" style="width: 80%">
                    <p>
                        <buton class="w3-button w3-padding-large w3-white w3-border">
                            <b>Leia mais...</b>
                        </buton>
                    </p>
                </div>
                <div class="w3-col w3-hide-small">
                    <p>
                        <span class="w3-padding-large w3-right">
                            <b>Comments</b>
                            <span class="w3-tag"><?php echo $Postagens_Principais[$contador]["comments"] ?></span>
                        </span>
                    </p>
                </div>
            </div>
        </div>
    </div>
<?php
    $contador++;
}
?>