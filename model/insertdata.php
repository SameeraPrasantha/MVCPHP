<?php
require_once '../config/config.php';
require_once '../controller/DataHandler.php';

$config = new Config(); // Create an instance of the Config class
$conn = $config->getConn(); // Get the database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $nid = $_POST["nid"];
    $name = $_POST["name"];
    $gender = $_POST["gender"];
    $bloodGroup = $_POST["group1"];
    $birthdate = $_POST["bdate"];

    // Create an instance of the DataHandler class
    $dataHandler = new DataHandler($conn);

    // Set the data in the DataHandler instance
    $dataHandler->setData($nid,$name, $gender, $bloodGroup, $birthdate);

    // Save the data using the DataHandler class
    $result = $dataHandler->saveData();

    // return the result
    echo $result;
}

// Close the database connection
$conn->close();
?>
