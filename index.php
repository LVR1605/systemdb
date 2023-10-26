<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    <?php
    require('DataFactory.php');

    $dataFactory = new DataFactory();

    if (isset($_POST['customer_button'])) {
        $data = $dataFactory->createCustomerData();
        $data->display();
    } elseif (isset($_POST['supplies_button'])) {
        $data = $dataFactory->createSupplyData();
        $data->display();
    } else {
        echo '<h3>Choose a database</h3>';
        echo '<form method="post">';
        echo '<input type="submit" name="customer_button" value="Customer">';
        echo '<input type="submit" name="supplies_button" value="Supplies">';
        echo '</form>';
    }
    ?>
</body>
</html>
