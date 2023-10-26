<?php
require('Data.php');

class DataFactory {
    private $conn;

    public function __construct() {
        require($_SERVER["DOCUMENT_ROOT"] . '/systemdb/database.php');
        $this->conn = $conn;
    }

    public function createCustomerData() {
        $sql = "SELECT * FROM customers";
        $result = $this->conn->query($sql);
        return new CustomerData($result);
    }

    public function createSupplyData() {
        $sql = "SELECT * FROM supplies";
        $result = $this->conn->query($sql);
        return new SupplyData($result);
    }
}
