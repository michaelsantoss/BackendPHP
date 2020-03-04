<?php

require_once 'src/Exemplo.php';
//==============================//
  echo "Conta Poupança<br>";
  $contaP = new ContaPoupanca();
  $contaP->depositar(2000);
  $contaP->validaSaque(1200);
  $contaP->getSaldo();
 
  //==============================//
  echo "<br>Conta Corrente<br>";
  $contaC = new ContaCorrente();
  $contaC->depositar(1000);
  $contaC->validaSaque(700);
  $contaC->getSaldo();
  