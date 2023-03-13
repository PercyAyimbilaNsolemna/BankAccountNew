<?php
    require_once("BankAccount.php");

    //Creates an object from the BankAccount class
    $bankAccount = new BankAccount();

    $bankAccount->setAccountHolderName("Percy");
    $bankAccount->setBalance(-12);
