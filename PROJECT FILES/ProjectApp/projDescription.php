<!DOCTYPE html>
<html>
<body>

<h1> Project Description </h1>

<form action="">

<p> Provide a concise description of the project and
  what you are asking the arts commission to support (500 word limit)</p>
<input type="text" name="description" size="50"> <br>

<p> Primary Activities (Venues for evets must be within Tacoma City Limits)</p> <br>

Activity 1:
<input type="text" name="activity1" size="50"> <br>

Street:
<input type="text" name="cStreet">
&nbsp; &nbsp; &nbsp;

City Council Distrcit:
<input type="text" name="distrcit"> <br>

City:
<input type="text" name="cCity">
&nbsp; &nbsp; &nbsp;
State:
<input type="text" name="cState">
&nbsp; &nbsp; &nbsp;
Zip:
<input type="integer" name="cZip" style="width: 32px;" required minlength='2' maxlength='2'><br>

</form>
<br><br>

<button onclick="goBack()"> Back </button>
<br>

<script>
function goBack() {
    window.history.back();
}
</script>


<form action="/ProjectApp/budget/budgetRequestInfo.php">
    <input type="submit" value="Save">
    <input type="submit" value="Save & Next">
</form>



</html>
</body>
