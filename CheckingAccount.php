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
    public function setTransac5tionFee($transactionFee){
        $this->transactionFee = $transactionFee;
    }

    //Creates a getter for the Transaction Fee attribute 
    public function getTransactionFee(){
        return $this->transactionFee;
    }

    //Creates a setter and a getter for the amount


    //Creates a withdraw method that overrides the withdraw method in the BankAccount class
    public function withdraw($amount){
        $this->amount = $amount;
        $this->balance - $this->transactionFee;
        return $this->setBalance($this->balance);
    }

}