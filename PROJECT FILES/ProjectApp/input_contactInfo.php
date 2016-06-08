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

  // //CREATE PROJECT with ID and Title but no other values
  // $createProj = "INSERT INTO `ProjectInfo`(`title`)
  //     VALUES ('$_POST[projTitle]')";
  //
  // $conn->exec($createProj);
  //
  // //get projectID of newly created Project
  // $last_id = $conn->lastInsertId();

  //echo "Project Title:  ".$_POST[projTitle]."  Project ID is: ".$last_id;

  //echo "".$last_id.", ".$_POST[first].", ".$_POST[last].", ".$_POST[cStreet].", ".$_POST[cCity].", ".$_POST[cState].", ".$_POST[cZip].", ".$_POST[cEmail].", ".$_POST[cPhone];

  //insert new contact information
  // $addContact = "INSERT INTO `ContactInfo`(`projectID`, `firstName`, `lastName`, `street`, `city`, `state`, `zip`, `email`, `dayPhone`)
  //         VALUES ('$last_id', '$_POST[first]', '$_POST[last]', '$_POST[cStreet]',
  //         '$_POST[cCity]', '$_POST[cState]', '$_POST[cZip]',
  //         '$_POST[cEmail]', '$_POST[cPhone]')";

  $addContact = "INSERT INTO `ContactInfo` (`projectID`, `firstName`, `lastName`, `street`, `city`, `state`, `zip`, `email`, `dayPhone`)
        VALUES ('19', 'Carly', 'Brock', '1500 N Warner', 'Tacoma', 'WA', '98416', 'carly@email.com', '2538791414')";

  //echo "".$addContact;
  $conn->exec($addContact);

  // $sql = $createProj.";".$addContact.";";
  // $conn->exec($sql);
  $conn = null;

  echo "Contact Info added successfully."

  // //encrypt password
  // $enc = openssl_encrypt('$_POST[password]','aes128','aRTSaPPcrYPT');
  //
  //ADAPT THIS SECTION****
  // if($enc == FALSE){
  //   $passErr = 'Password could not be stored';
  //   $success = false;
  // }
  //
  // if($success == true){
  //
  // //store email and encrypted password in table
  // $loginSql = " INSERT INTO `Login`(`email`, `password`) VALUES
  //               ('$_POST[cEmail]', '$enc')"
  // $conn->exec($loginSql);
  // echo "Login added successfully. "."Enc Pass: ".$enc;
  // }


  //header("Location: /generalInfo.php");
}
catch(PDOException $e){
  echo "Connection Failed: ".$e->getMessage();
}

?>
