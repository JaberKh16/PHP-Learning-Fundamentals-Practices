<?php
    class BankAccount{
        // class instance properties
        public static string $account_type = 'Saving Account';
        public string $account_number;
        public string $account_holder_name;
        public float $balance;
        
        // constructor
        public function __construct($account_number, $account_holder_name, $balance){
            $this->account_number = $account_number;
            $this->account_holder_name = $account_holder_name;
            $this->balance = $balance;
        }
        
        // static method
        public static function account_information(){
            echo "Account Type: ".self::$account_type."<br>";
        }
        
        // default method
        public function check_deposit($amount){
            if($amount > 0){
                $this->balance +=$amount;
            }
            return $this->balance;
        }

        public function withdrawl_amount($amount){
            if($amount <= $this-> balance){
                $this->balance -= $amount;
            }
            return $this->balance;
        }
    }

    $bank_acccount1 = new BankAccount('1004', 'JK', 20000);
    echo $bank_acccount1->account_information();
    echo 'Deposit Money: '.$bank_acccount1->check_deposit(400)."<br>";
    echo 'After Withdrawl Money: '.$bank_acccount1->withdrawl_amount(400);

?>
