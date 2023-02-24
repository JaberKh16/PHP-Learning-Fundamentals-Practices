<?php
    class DatabaseConnect{

        public string $serverName;
        public $portNo;
        public string $dbName;
        public string $userName;
        public string $userPass;
        public $conn;

        public function __construct(){
            $this->serverName = "localhost";
            $this->portNo = 3312;
            $this->dbName = "register_login";
            $this->userName = "root";
            $this->userPass = "";
        }

        public function connectToDatabase($conn)
        {
             
            $conn =  new mysqli($this->serverName, $this->userName, $this->userPass, $this->dbName);
            // echo $conn;

            if(empty($conn)){
                die("Connection failed: ". mysqli_connect_error());
            }
            else{
                // echo "Connected Successfully.".'<br>';
                // header("register-page.php");

                // creating database instance
                $connection = new DatabaseConnect();
                // var_dump($connection);
                // return $connection;

            }
        }
    }


