<?php
class conta{
    protected $agencia;
    protected $conta;
    protected $saldo;

    // Método consructor
    public function conta($agencia, $conta, $saldo){
        $this->agencia = $agencia;
        $this->conta =$conta;
        if($saldo >- 0){
            $this->saldo = $saldo;
        }
    }
    }
?>