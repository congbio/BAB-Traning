<?php
//  class BankAccount 
// {
//    private $accountNumber;
//    private $owner;
//    private $balance;

//    public function __construct($accountNumber, $owner, $balance) 
//   {
//        $this->accountNumber = $accountNumber;
//        $this->owner = $owner;
//        $this->balance = $balance;
//    }
// }
// $account = new BankAccount(123, "Bart", 100);
 
 interface Builder
{
     public function setAccountNumber($accountNumber);
     public function setOwner($owner);
     public function setBranch($branch);
     public function setBalance($balance);
     public function setInterestRate($interestRate);
     public function build();
}

 class BankAccountBuilder implements Builder
{
     private $accountNumber;
     private $owner;
     private $branch;
     private $balance;
     private $interestRate;

     public function setAccountNumber($accountNumber)
     {
          $this->accountNumber = $accountNumber;
          return $this;
     }

     public function setOwner($owner)
     {
          $this->owner = $owner;
          return $this;
     } 

     public function setBranch($branch)
     {
          $this->branch = $branch;
          return $this;
     }

     public function setBalance($balance)
     {
          $this->balance = $balance;
          return $this;
     }

     public function setInterestRate($interestRate)
     {
          $this->interestRate = $interestRate;
          return $this;
     }

     public function build()
     {
          return new BankAccount($this->accountNumber, $this->owner, $this->branch, $this->balance, $this->interestRate);
     }
}

  class BankAccount
{
     private $accountNumber;
     private $owner;
     private $branch;
     private $balance;
     private $interestRate;

     public function __construct($accountNumber, $owner, $branch, $balance, $interestRate)
     {
          $this->accountNumber = $accountNumber;
          $this->owner = $owner;
          $this->branch = $branch;
          $this->balance = $balance;
          $this->interestRate = $interestRate;
     }

     public function getAccountNumber()
     {
          return $this->accountNumber;
     }

     public function getOwner()
     {
          return $this->owner;
     }

     public function getBranch()
     {    
          return $this->branch;
     }

     public function getBalance()
     {
          return $this->balance;
     }

     public function getInterestRate()
     {
          return $this->interestRate;
     }

     public function showInfo()
     {
          echo "XYZ Bank – Account Information";
          echo "\n";
          if (!empty( (string) $this->getAccountNumber() ))
               echo "* Number: " . $this->getAccountNumber();
          if (!empty( (string) $this->getOwner() ))
               echo "* Owner: " . $this->getOwner();
          if (!empty( (string) $this->getBranch() ))
               echo "* Branch: " . $this->getBranch();
          if (!empty( (string) $this->getBalance() ))
               echo "* Balance: " . $this->getBalance();
          if (!empty( (string) $this->getInterestRate() ))
               echo "* Interest Rate: " . 
$this->getInterestRate();
     }
}

$bankAccount = new BankAccountBuilder();
$bankAccount.setOwner("Homer");
$bankAccount.setBalance(100.00);
$bankAccount.setInterestRate(2.5);
$bankAccount.build();
$bankAccount.showInfo();
?>