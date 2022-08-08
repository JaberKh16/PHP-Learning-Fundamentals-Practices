<?php
    /*
        Inheritance In PHP Concept
        ==========================
        Inheritance is an idea about inherting Parent Class properties
        and methods into the Child Class.
        
        Syntax-
            class ChildClass extends ParentClass{
                public string $property1;
                public string $property2;
                public function __construct($property1, $property2, ..){
                    $this->property1 = $property1;
                    $this->property2 = $property2; 
                }
            }

        Calling methods from the Parent Class can be also done using the keyword
        '$this' inside the class methods.

        Only the non-private(means public and protected) properties and methods
        can be accessed by the extended Child Class.

        To include a Parent Constructor inside the Child Constructor in a Child Class
        do the following-

            class ChildClass extends ParentClass{
                public function __construct($property1, $property2, ..){
                        parent::__construct($property1, $property2); // to get the parent class constructor
                        $this->property1 = $property1;
                        $this->property2 = $property2; 
                }
            }
    */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inheritance In PHP</title>
</head>
<body>
    <?php
        class BankAccount{
            public string $account_no;
            private float $balance;

            public function getBalance(){
                return $this->balance;
            }
        
            public function deposit($amount){
                if ($amount > 0) {
                    $this->balance += $amount;
                }
        
                return $this;
            }
        }
        
        class SavingAccount extends BankAccount{
            private $interestRate;

            public function setInterestRate($interestRate){
                $this->interestRate = $interestRate;
            }
            public function addInterest(){
                // calculate interest
                $interest = $this->interestRate * $this->getBalance();
                // deposit interest to the balance
                $this->deposit($interest);
            }

        }


        // creating the instance
        $account = new SavingAccount();
        $account->deposit(400.500);
        // $account->getBalance();
        
        // set interest rate
        $account->setInterestRate(0.05);
        $account->addInterest();
        echo $account->getBalance();

    ?>
</body>
</html>