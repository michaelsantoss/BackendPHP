<?php
/**
 * Classe de exemplo
 *
 * @author Marcelo Jean <mjean@reweb.com.br> -- editado por Michael Bitencourt
 */
    class Conta {
    public $saldo = 0;
    public $operacao = [];
    public function getDescontos(){
      foreach ($this->operacao as $key => $value) {
        //echo $value;
      }
    }
  } 
    
  trait Acoes {
    public function depositar($valor){
      $this->saldo += $valor;
    }
    public function sacar($valor){
      if($this->saldo >= $valor){
        $this->saldo -= $valor;
      }
    }
    public function transferir($valor,$destino){
      if($this->saldo >= $valor){
        $destino->depositar($valor);
        $this->saldo -= $valor;
      }
    }
  }
    
  trait consultaExtrato{
    public function getSaldo(){
      echo "Saldo disponivel para saque:B$ {$this->saldo}0<br>";
    }
    
  } 
    
  class ContaCorrente extends Conta{
    use Acoes, consultaExtrato;
     public function validaSaque($valor){
    	if($valor>600){
    		echo "Valor maior que o limite permitido<br>";
    	}else{
    		$this->sacar($valor);
    		array_push($this->operacao, 2.50,'saque');
    		$this->saldo-=2.50;
    	}

    }
  } 
  class ContaPoupanca extends Conta{
    use Acoes, consultaExtrato;
    public function validaSaque($valor){
    	if($valor>1000){
    		echo "Valor maior que o limite permitido<br>";
    	}else{
    		$this->sacar($valor);
        array_push($this->operacao, 0.80,'sacar');
    		$this->saldo-=0.80;
    	}

    }
  } 

  ?>
    
