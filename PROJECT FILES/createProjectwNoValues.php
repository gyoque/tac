<?php

 //CREATE PROJECT ID but no values
 $createProjID = "INSERT INTO `ProjectInfo`(`title`,
 `startDate`, `endDate`, `fundRequest`, `description`, `budgetPage`, `appNarrative`,
 `agreementLetter`) VALUES ('New Project', NULL, NULL, NULL, NULL, NULL, NULL, NULL)";

  $conn->exec($createProjID);

 //select projectID
 // $queryID = $conn->query("SELECT `projectID` FROM `ProjectInfo` WHERE `title`='New Project'");
 //
 // //parse query to get projectID
 // $projID = "";
 // foreach ($queryID as $row)
 //   $projID = $row['password'];

 $last_id = $conn->lastInsertId();
   //echo "New record created successfully. Last inserted ID is: " . $last_id;

?>
