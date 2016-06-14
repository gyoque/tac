<?php
$servername = "localhost";
$username = "root";
$password = "artsApply2!";
$dbname = "tac";
try{
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //echo "Connected successfully";


  $project_id = $_COOKIE['artsProject'];

  $addBusStatus = "INSERT INTO `BusinessStatus`(`projectID`, `forProfit`, `fedEmpID`, `uniBusID`, `busLicense`)
        VALUES ($project_id,$_POST[profitBus],'$_POST[ein]','$_POST[ubi]','$_POST[tbl]')";

  $conn->exec($addBusStatus);



}
catch(PDOException $e){
    echo "Connection Failed: ".$e->getMessage();

}



  ?>
