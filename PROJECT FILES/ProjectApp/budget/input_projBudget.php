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

    //project budget Type is 1 (boolean)
    $firstOp = "INSERT INTO `budget`(`projectID`, `year`, `budget`, `type`)
      VALUES ($project_id, $firstY , $_POST['firstYear'], 1)";

    $conn->exec($firstOp);

    $secOp = "INSERT INTO `budget`(`projectID`, `year`, `budget`, `type`)
      VALUES ($project_id, $secondY , $_POST['secondYear'], 1)";

    $conn->exec($secOp);

    $thirdOp = "INSERT INTO `budget`(`projectID`, `year`, `budget`, `type`)
        VALUES ($project_id, $thirdY , $_POST['thirdYear'], 1)";

    $conn->exec($thirdOp);

    $conn = null;

    header("Location: /ProjectApp/buget/budgetRequestInfo.php");

  }
  catch(PDOException $e){
      echo "Connection Failed: ".$e->getMessage();

  }
?>
