<?php
class DBConfigurationSetup {
    protected $db_name;
    protected $db_host;
    protected $db_user;
    protected $db_password;
    protected $db_port;
    protected $pdo_conn;

    public function __construct() {
        $this->db_host = "localhost";
        $this->db_user = "root"; 
        $this->db_password = ""; 
        $this->db_port = "3312"; 
        $this->db_name = "setup_ob_model";
    }

    public function db_configuration_run() {
        // Define the DSN and PDO options
        $dsn = "mysql:host={$this->db_host};port={$this->db_port};dbname={$this->db_name};charset=utf8";
        $pdo_options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_EMULATE_PREPARES => false,
        ];

        // Create a PDO connection
        try {
            $pdo_conn = new PDO($dsn, $this->db_user, $this->db_password, $pdo_options);
            return $pdo_conn;
        } catch (PDOException $e) {
            die("Database connection failed: " . $e->getMessage());
        }
    }
}
?>
