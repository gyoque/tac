<!DOCTYPE html>
<html>
<body>

<h1> General Information </h1>

<form action="input_generalInfo.php" method="post">

Name of Organization:
<input type="text" name="orgName" > <br>

Name of Officer who will sign contracted:<br>

First Name:
<input type="text" name="f_name"> &nbsp;&nbsp;
Last Name:
<input type="text" name="l_name"> <br>

Address of organization: <br>

Street:
<input type="text" name="orgStreet"><br>

City:
<input type="text" name="orgCity"><br>

State:
<input type="text" name="orgState" style="width: 32px;" minlength='2' maxlength='2'><br>

Zip:
<input type="integer" name="orgZip" required><br>


Phone Number: (XXXXXXXXXX No Spaces or Dashes)
<input type="integer" name="phone"> <br>

Email:
<input type="text" name="email"><br>


<br><br>
<button onclick="goBack()"> Back </button>
<br>

<input type="submit" value="Save">
<input type="submit" value="Save & Next">

</form>





<script>
function goBack() {
    window.history.back();
}
</script>





</body>
</html>
