<?php

class DBQueries extends DBConfigurationSetup {
    protected $query_result;

    public function QueryRun($sql_query, $params = array()) {
        $this->query_result = false;
        $pdo_conn = $this->db_configuration_run(); // Assuming DBConfigurationSetup has a method to get the PDO connection.

        if (empty($params)) {
            $this->query_result = $pdo_conn->prepare($sql_query);
            $this->query_result->execute();
        } else {
            $this->query_result = $pdo_conn->prepare($sql_query);
            $this->query_result->execute($params);
        }
        return $this->query_result;
    }

    public function FetchResults($sql_query, $params = array()) {
        $this->query_result = $this->QueryRun($sql_query, $params);

        if ($this->query_result) {
            return $this->query_result->fetchAll(PDO::FETCH_ASSOC);
        } else {
            return false; // Return false on error
        }
    }
}
