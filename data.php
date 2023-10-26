<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
class Data {
    protected $result;

    public function __construct($result) {
        $this->result = $result;
    }

    public function display() {
        echo '<table>';
        echo '<thead>';
        echo '<th>ID</th>';
        echo '<th>Name</th>';
        echo $this->getTableHeaders();
        echo '</thead>';
        echo '<tbody>';
        while ($row = $this->result->fetch_assoc()) {
            echo '<tr>';
            echo $this->getRowContent($row);
            echo '</tr>';
        }
        echo '</tbody>';
        echo '</table>';
    }

    protected function getTableHeaders() {
        return ''; // Implement this in subclasses
    }

    protected function getRowContent($row) {
        return ''; // Implement this in subclasses
    }
}

class CustomerData extends Data {
    protected function getTableHeaders() {
        return '<th>Address</th><th>Contact Number</th>';
    }

    protected function getRowContent($row) {
        return '<td>' . $row['companyID'] . '</td> <td>' . $row['companyName'] . '</td> <td>' . $row['companyAddress'] . '</td> <td>' . $row['contactNumber'] . '</td>';
    }
}

class SupplyData extends Data {
    protected function getTableHeaders() {
        return '<th>Quantity</th><th>Price</th>';
    }

    protected function getRowContent($row) {
        return '<td>' . $row['supplyID'] . '</td> <td>' . $row['supplyName'] . '</td> <td>' . $row['quantity'] . '</td> <td>' . $row['price'] . '</td>';
    }
}
?>
</body>
</html>