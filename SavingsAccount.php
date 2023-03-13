<?php

class SavingsAccount extends BankAccount{

    //Declares some properties of the SavingsAccount class
    private $interestRate;
    public $interest;

    //Creates a constructor method for the SavingsAccount class
    public function __construct(){
        parent::__construct__();
    }

    //Creates a setter for the interest rate
    public function setInterestRate($interestRate){
        $this->interestRate = $interestRate;
    }

    //Creates a getter for the interest rate
    public function getInterestRate(){
        return $this->interestRate;
    }

    //Creates a function that calculates the interest rate
    public function addInterest(){
        $interest = $this->balance * $this->interestRate * 1;
        $this->balance = $this->interest + $this->balance;
        return $this->balance;
    }
}