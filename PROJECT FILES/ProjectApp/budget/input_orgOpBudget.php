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

    $currentYear = date("Y");
    $firstY = $currentYear - 3;
    $secondY = $currentYear - 2;
    $thirdY = $currentYear - 1;

    //operating budget Type is 0 (boolean)
    $firstOp = "INSERT INTO `budget`(`projectID`, `year`, `budget`, `type`)
      VALUES ($project_id, $firstY , $_POST['firstYear'], 0)";

    $conn->exec($firstOp);

    $secOp = "INSERT INTO `budget`(`projectID`, `year`, `budget`, `type`)
      VALUES ($project_id, $secondY , $_POST['secondYear'], 0)";

    $conn->exec($secOp);

    $thirdOp = "INSERT INTO `budget`(`projectID`, `year`, `budget`, `type`)
        VALUES ($project_id, $thirdY , $_POST['thirdYear'], 0)";

    $conn->exec($thirdOp);

    $conn = null;

    header("Location: /ProjectApp/budget/projBudget.php");

  }
  catch(PDOException $e){
      echo "Connection Failed: ".$e->getMessage();

  }
?>
