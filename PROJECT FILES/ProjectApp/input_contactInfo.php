<?php
$servername = "localhost";
$username = "root";
$password = "artsApply2!";
$dbname = "tac";

//try{

  //create new PDO connection
  $conn = new PDO("mysql:dbname=$dbname;host={$servername}", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //echo "Connected successfully";

  //CREATE PROJECT with ID and Title but no other values
  //ID is automatically created and incremented
  $createProj = "INSERT INTO `ProjectInfo`(`title`)
       VALUES ('$_POST[projTitle]')";

  $conn->exec($createProj);

  //get projectID of newly created Project
  $last_id = $conn->lastInsertId();

  //echo "Project Title:  ".$_POST[projTitle]."  Project ID is: ".$last_id;

  //echo "".$last_id.", ".$_POST[first].", ".$_POST[last].", ".$_POST[cStreet].", ".$_POST[cCity].", ".$_POST[cState].", ".$_POST[cZip].", ".$_POST[cEmail].", ".$_POST[cPhone];

  //insert new contact information
  $addContact = "INSERT INTO `ContactInfo`(`projectID`, `firstName`, `lastName`, `street`, `city`, `state`, `zip`, `email`, `dayPhone`)
      VALUES ('$last_id', '$_POST[first]', '$_POST[last]', '$_POST[cStreet]', '$_POST[cCity]', '$_POST[cState]', '$_POST[cZip]', '$_POST[cEmail]', '$_POST[cPhone]')";

  $conn->exec($addContact);

  //echo "Contact Info added successfully."

  //encrypt password
  $enc = openssl_encrypt('$_POST[password]','aes128','aRTSaPPcrYPT');

  if($enc == FALSE){
    $passErr = 'Password could not be stored';
    $success = false;
  }
  //echo "password created?   ".$success;


  if($success == true){
    //store email and encrypted password in table
    $loginSql = " INSERT INTO `Login`(`email`, `password`) VALUES
                  ('$_POST[cEmail]', '$enc')"
    $conn->exec($loginSql);
    echo "Login added successfully. "."Enc Pass: ".$enc;
  }

  //create cookie here?

  $conn = null;


  //header("Location: /generalInfo.php");
//}

//catch(PDOException $e){
 // echo "Connection Failed: ".$e->getMessage();
//  die();
//}

?>
