<!DOCTYPE html>
<html>
<body>

<h1>Budget</h1>
Operational Operating Budget for the last three complete fiscal years

//get current year, and get previous years

<?php

  $currentYear = date("Y");
  $firstY = $currentYear - 3;
  $secondY = $currentYear - 2;
  $thirdY = $currentYear - 1;
?>


<form action="">
2013 $
<input type="integer" name="firstYear"> <br>

2014 $
<input type="integer" name="secondYear"> <br>

2015 $
<input type="integer" name="thirdYear"> <br>

</form>




<br><br>

<button onclick="goBack()"> Back </button>
<br>

<script>
function goBack() {
    window.history.back();
}
</script>


<form action="/ProjectApp/budget/projBudget.php">
    <input type="submit" value="Save">
    <input type="submit" value="Save & Next">
</form>



</body>
</html>
