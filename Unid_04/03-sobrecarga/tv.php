<?php

class TV
{
    private $canal;

    function __construct()
    {
        // liga a TV no canal padrão
        $this->canal = 1;
    }

    public function Ligar()
    {
        // liga a TV no canal definido pelo argumento $canal */
        $Num_argumentos = func_num_args();
        if ($Num_argumentos == 0) {
            // Liga a TV no canal padrão
            echo "Liga a TV no canal padrão " . $this->canal . ".<br>";
        } else {
            // Liga a TV no canal definido para argumento $canal
            echo "Liga a TV no canal " . func_get_arg(0) . ".<br>";
        }
    }
}
