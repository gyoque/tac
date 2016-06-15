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

  //create organization infromation
  $insertOrg = " INSERT INTO `OrganizationInfo`(`orgName`, `officerFirst`, `officerLast`,
    `street`, `city`, `state`, `zip`, `phone`, `email`)
    VALUES ('$_POST[orgName]','$_POST[f_name]','$_POST[l_name]','$_POST[orgStreet]',
    '$_POST[orgCity]','$_POST[orgState]',$_POST[orgZip],$_POST[phone],'$_POST[email]') ";

  $conn->exec($insertOrg);

  //associate the organization with the projectID
  $assosProj = " INSERT INTO `OrgsProject`(`orgName`, `projectID`) VALUES ('$_POST[orgName]', $project_id) "

  $conn->exec($assosProj);

  $conn = null;

  //echo "Organization and project association added successfully";


  header("Location: /busStatus.php");

}
catch(PDOException $e){
  echo "Connection Failed: ".$e->getMessage();

}



?>
