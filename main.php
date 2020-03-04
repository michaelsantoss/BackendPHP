<?php

require_once 'src/Exemplo.php';
  $contaP = new ContaPoupanca();
  $contaC = new ContaCorrente();
  //==============================//
  
  $contaP->depositar(10);
  $contaC->depositar(10);
  //==============================//
  
  $contaP->validaSaque(0);
  $contaC->validaSaque(0);
  //==============================//
  
  $contaC->transferir(5,$contaP);
  $contaP->transferir(0,$contaC);
  //==============================//  

  echo "<br>Conta Poupança<br>";
  $contaP->getSaldo();
  echo "<br>Conta Corrente<br>";
  $contaC->getSaldo();
