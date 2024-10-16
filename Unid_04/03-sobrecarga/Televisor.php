<?php
class Televisor
{
    private $canal;

    function __construct()
    {
        $this->canal = 1;
    }
    public function Ligar()
    {
        $Num_argumentos = func_num_args();
        if ($Num_argumentos == 0) {
            // liga a TV no canal padrão
            echo "Liga a TV no canala padrão: " . $this->canal . "<br>";
        } else {
            // testa se o argumento passado é do tipo numero ou string
            if (is_numeric(func_get_arg(0))) {
                // executa método para sintonizar a TV pelo parâmetro numérico
                echo "Liga a TV no canal número: " . func_get_arg(0) . "<br>";
            } else {
                // executa método para sintonizar a TV pelo parâmetro string
                echo "Liga a TV no canal de nome: " . func_get_arg(0);
            }
        }
    }
}
