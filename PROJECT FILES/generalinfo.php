<!DOCTYPE html>
<html>
<body>

<h1> General Information </h1>

<form action="">

Name of Organization:
<input type="text" name="orgName" > <br>

Name of Officer who will sign contracted:
<input type="text" name="officer"><br>

Address of organization: <br>

Street:
<input type="text" name="orgStreet"><br>

City:
<input type="text" name="orgCity"><br>

State:
<input type="text" name="orgState"><br>

Zip:
<input type="integer" name="orgZip" style="width: 32px;" required minlength='2' maxlength='2'><br>


Phone Number: (XXXXXXXXXX No Spaces or Dashes)
<input type="integer" name="phone"> <br>

Email:
<input type="text" name="email"><br>




</form>

<br><br>

<button onclick="goBack()"> Back </button>
<br>

<script>
function goBack() {
    window.history.back();
}
</script>


<form action="/ProjectApp/budget/input_generalInfo.php">
    <input type="submit" value="Save">
    <input type="submit" value="Save & Next">
</form>


</body>
</html>
