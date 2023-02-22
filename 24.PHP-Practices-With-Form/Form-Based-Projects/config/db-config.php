<?php
    class DatabaseConnect{

        public string $serverName = "localhost";
        public string $portNo = "3312";
        public string $dbName = "register_login";
        public string $userName = "root";
        public string $userPass = "";
        public static string $conn;

        function __construct()
        {
            
            $conn =  new mysqli($this->serverName, $this->portNo, $this->dbName, $this->userName, $this->userPass);
            echo $conn;

            if(!$conn){
                die("Connection failed: ". mysqli_connect_error());
            }
            else{
                echo "Connected Successfully.".'<br>';
            }
        }
    }

