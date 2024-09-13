<?php

$Alunos_Turma = array(
    1 => array(
        "nome" => "Pedro",
        "notas" => array(
            1 => $Nota01 = 6.7,
            2 => $Nota02 = 5.3,
            3 => $Nota03 = 4.5,
            4 => $Nota04 = 9.5,
            5 => $Nota05 = 6.7,
            6 => $Nota06 = 9.5,
        ),
        "media" => ($Nota01 + $Nota02 + $Nota03 + $Nota04 + $Nota05 + $Nota06) / 6
    ),
    2 => array(
        "nome" => "Maria",
        "notas" => array(
            1 => $Nota01 = 4.7,
            2 => $Nota02 = 6.3,
            3 => $Nota03 = 8.5,
            4 => $Nota04 = 5.5,
            5 => $Nota05 = 6.7,
            6 => $Nota06 = 9.5,
        ),
        "media" => ($Nota01 + $Nota02 + $Nota03 + $Nota04 + $Nota05 + $Nota06) / 6
    ),
    3 => array(
        "nome" => "João",
        "notas" => array(
            1 => $Nota01 = 9.7,
            2 => $Nota02 = 5.3,
            3 => $Nota03 = 5.5,
            4 => $Nota04 = 6.5,
            5 => $Nota05 = 6.7,
            6 => $Nota06 = 9.5,
        ),
        "media" => ($Nota01 + $Nota02 + $Nota03 + $Nota04 + $Nota05 + $Nota06) / 6
    ),
);

if ($Alunos_Turma[3] ["media"] >= 7.0) {
    echo "Aluno: " ."<b>".$Alunos_Turma[3] ["nome"]."</b></br>";
    echo "Média: "."<b>". $Alunos_Turma[3] ["media"] ."</b>"." | Resultado: <b>APROVADO(A)!</b>";
} else if($Alunos_Turma[2] ["media"] >= 4.0 || $Alunos_Turma[2] ["media"] < 7){
    echo "Aluno: " ."<b>".$Alunos_Turma[3] ["nome"]."</b></br>";
    echo "Média: "."<b>". $Alunos_Turma[3] ["media"] ."</b>"." | Resultado: <b>RECUPERAÇÃO!</b>";
}else {
    echo "Aluno: " ."<b>".$Alunos_Turma[3] ["nome"]."</b></br>";
    echo "Média: "."<b>". $Alunos_Turma[3] ["media"] ."</b>"." | Resultado: <b>REPROVADO(A)!</b>";
}
