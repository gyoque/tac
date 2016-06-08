<!DOCTYPE html>
<html>
<body>

<h1>Budget</h1>
Project Budget for the last three complete fiscal years




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


<form action="/ProjectApp/busStatus.php">
    <input type="submit" value="Save">
    <input type="submit" value="Save & Next">
</form>



</body>
</html>
