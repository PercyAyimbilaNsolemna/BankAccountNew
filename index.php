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
    
    echo "Dear customer you have deposited an amount of $" . $bankAccount->getAmount() . ". Your current Balance is $" . $bankAccount->getBalance() . "<br><br>";

    $bankAccount->deposit(30);

    echo "Dear customer you have deposited an amount of $" . $bankAccount->getAmount() . ". Your current Balance is $" . $bankAccount->getBalance() . "<br><br>";

    $bankAccount->withdraw(40);

    echo "Dear customer you have withdrawn an amount of $" . $bankAccount->getAmount() . ". Your current Balance is $" . $bankAccount->getBalance() . "<br><br>";

    $bankAccount->withdraw(20);

    echo "Dear customer you have withdrawn an amount of $" . $bankAccount->getAmount() . ". Your current Balance is $" . $bankAccount->getBalance() . "<br><br>";

    //Creates an object from the SavingsAccount class 
    $savingsAccount = new SavingsAccount();

    //Sets the attributes of the SavingsAccount class
    echo "This is where the savings Account starts" . "<br><br>";

    $savingsAccount->setAccountNumber("209856");

    $savingsAccount->setAccountHolderName("Percy Ayimbila");

    $savingsAccount->setBalance(30);

    //Outputs the variuos attributes of the class 
    echo "Account Number: " . $savingsAccount->getAccountNumber() . "<br><br>";

    echo "Account Name: " . $savingsAccount->getAccountHolderName() . "<br><br>";

    echo "Balance: " . $savingsAccount->getBalance() . "<br><br>";

    //Makes some deposits and withdrawals from the bankAccount

    $savingsAccount->deposit(30);

    echo "Dear customer you have deposited an amount of $" . $savingsAccount->getAmount() . ". Your current Balance is $" . $savingsAccount->getBalance() . "<br><br>";

    $savingsAccount->deposit(10);

    echo "Dear customer you have deposited an amount of $" . $savingsAccount->getAmount() . ". Your current Balance is $" . $savingsAccount->getBalance() . "<br><br>";

    $savingsAccount->withdraw(40);

    echo "Dear customer you have withdrawn an amount of $" . $savingsAccount->getAmount() . ". Your current Balance is $" . $savingsAccount->getBalance() . "<br><br>";

    //Uses the methods in the SavingsAccount class to get some few interest for the user 
    $savingsAccount->setInterestRate(40);

    $savingsAccount->addInterest();

    echo "Dear customer you have an interest of $" . $savingsAccount->getInterest() . ". Your current balance is $" . $savingsAccount->getBalance() . "<br><br>";
