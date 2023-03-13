<?php

class BankAccount{

    //Declaring properties or attributes of the class
private $accountNumber, $accountHolderName;
private $balance;

private $amount;

//Defines a constructor for the BankAccount class
public function __construct__(){

}

//Creates a setter for the account number property
public function setAccountNumber($accountNumber){
    $this->accountNumber = $accountNumber;
}

//Creates a getter for the account number property
public function getAccountnumber(){
    return $this->accountNumber;
}

//Creates a setter for the accountHolderName
public function setAccountHolderName($accountHolderName){
    $this->accountHolderName = $accountHolderName;
}

//Creates a getter for the account holder name
public function getAccountHolderName(){
    return $this->accountHolderName;
}

//Creates a setter for the balance property
public function setBalance($balance){
    if ($balance < 0){
        trigger_error("Dear " + $this->accountHolderName + " you have insufficient balance in your account", E_USER_ERROR);
    }
    else{
        $this->balance = $balance;
    }
    
}

//Creates a getter for the balance
public function getBalance(){
    return $this->balance;
}

//Creates a getter for amount
public function setAmount($amount){
    $this->amount = $amount;
}

public function getAmount(){
    return $this->amount ;
}

//Creates a deposit method to allow the user to deposit money
public function deposit($amount){
    $this->amount = $amount;
    $this->balance = $this->balance + $this->amount;
}

//Creates a withdrawal method to allow user to withdraw money
public function withdraw($amount){
    $this->amount = $amount;
    $this->balance = $this->balance - $this->amount;
}
}