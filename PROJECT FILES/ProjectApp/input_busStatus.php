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

    //select organization name
    $project_id = $_COOKIE['artsProject'];

    $getOrgName = "SELECT `orgName` FROM `OrgsProject` WHERE 'projectID'= $project_id";
    //query returns array
    $orgName = conn->query($getOrgName);

    //select name from array
    foreach($orgname as $tup){
      $orgname = $tup[0];
      break;
    }

    $addBusStatus = "INSERT INTO `BusinessStatus`(`orgName`, `forProfit`, `fedEmpID`, `uniBusID`, `busLicense`)
          VALUES ($orgName,$_POST[profitBus],'$_POST[ein]','$_POST[ubi]','$_POST[tbl]')";

    $conn->exec($addBusStatus);

    $conn=null;

    header("Location: /ProjectApp/budget/orgOpBudget.php");

  }
  catch(PDOException $e){
      echo "Connection Failed: ".$e->getMessage();

  }

?>
