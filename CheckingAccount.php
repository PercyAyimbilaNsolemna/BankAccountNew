<?php

require_once("BankAccount.php");

class CheckingAccount extends BankAccount {

    //Creates  attributes of the class 
    private $transactionFee;

    private $amount;

    public function __construct__() {

        parent::__construct__();
    }

    //Creates a setter for the Transaction Fee attribute
    public function setTransactionFee($transactionFee){
        $this->transactionFee = $transactionFee;
    }

    //Creates a getter for the Transaction Fee attribute 
    public function getTransactionFee(){
        return $this->transactionFee;
    }

    //Creates a getter for the amount
    public function getAmount(){
        return $this->amount;
    }

    //Creates a withdraw method that overrides the withdraw method in the BankAccount class
    public function withdraw($amount){
        $this->amount = $amount;
        $this->transactionFee = (1/100) * ($this->amount);
        $this->balance = $this->getBalance() - $this->transactionFee;
        return $this->setBalance($this->balance);
    }

}