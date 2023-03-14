<?php
    require_once("BankAccount.php");
    require_once("SavingsAccount.php");

    //Creates an object from the BankAccount class
    $bankAccount = new BankAccount();

    //Sets the account number
    $bankAccount->setAccountNumber("102367");

    //Sets the account holder name
    $bankAccount->setAccountHolderName("Sabastian Abelezele");

    //Sets the account balance
    $bankAccount->setBalance(20);

    //Outputs the various attributes to the screen 
    echo "The account number is " . $bankAccount->getAccountNumber() . "<br>";

    echo "The account name is " . $bankAccount->getAccountHolderName() . "<br>";

    echo "Dear " . $bankAccount->getAccountHolderName() . " your current balance is $" . $bankAccount->getBalance() . "<br><br>";

    //Experiments the deposit and withdrawal methods in the BankAccount class 
    $bankAccount->deposit(50);
    
    echo "Dear customer you haver deposited an amount of $" . $bankAccount->getAmount() . ". Your current Balance is $" . $bankAccount->getBalance() . "<br><br>";

    $bankAccount->deposit(30);

    echo "Dear customer you haver deposited an amount of $" . $bankAccount->getAmount() . ". Your current Balance is $" . $bankAccount->getBalance() . "<br><br>";

