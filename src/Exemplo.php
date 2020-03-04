<?php
/**
 * Classe de exemplo
 *
 * @author Marcelo Jean <mjean@reweb.com.br> -- editado por Michael Bitencourt
 */
    class Conta {
    public $saldo = 0;
    public $operacao = 0;
    public function getSaldo(){
      echo "Saldo Atual: {$this->saldo}";
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
  }
    
  trait consultaExtrato{
    public function getSaldo(){
      echo "Saldo Disponivel para saque:{$this->saldo}<br>";
    }
    
  } 
    
  class ContaCorrente extends Conta{
    use Acoes, consultaExtrato;
     public function validaSaque($valor){
    	if($valor>600){
    		echo "Valor maior que o limite permitido<br>";
    	}else{
    		$this->sacar($valor);
    		$this->operacao+=2.50;
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
    		$this->operacao+=0.80;
    		$this->saldo-=0.80;
    	}

    }
  } 

  ?>
    
