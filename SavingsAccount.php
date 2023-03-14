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

    //Creates a setter for the interest property
    public function setInterest($interest){
        $this->interest = $interest;
    }

    //Creates a getter for the interest 
    public function getInterest(){
        return $this->interest;
    }

    //Creates a function that calculates the interest rate
    public function addInterest(){
        $this->interest = $this->getBalance() * ($this->interestRate / 100);
        return $this->setBalance($this->interest + $this->getBalance());
    }
}