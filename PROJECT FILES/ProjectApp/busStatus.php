<!DOCTYPE html>
<html>
<body>


<h1> Business Status of Applicant </h1>

<p> Is your business: </p>
<form action="input_busStatus.php" method="post">
  <input type="checkbox" name="profitBus" value="1"> For Profit<br>
  <input type="checkbox" name="profitBus" value="0"> Not-For Profit

  <br><br>

  Federal Employer Identification Number (EIN):
  <input type="text" name="ein"> <br>

  Unified Business Identifier Number (ubi):
  <input type="text" name="ubi" > <br>

  City of Tacoma Business License Number:
  <input type="text" name="tbl">

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
