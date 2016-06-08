<!DOCTYPE html>
<html>
<body>


<h1> Business Status of Applicant </h1>

<p> Is your business: </p>
<form action="">
<input type="checkbox" name="profitBus" value="Profit"> For Profit<br>
<input type="checkbox" name="profitBus" value="NonProfit"> Not-For Profit

<br><br>

Federal Employer Identification Number (EIN):
<input type="text" name="EIN"> <br>

Unified Business Identifier Number (ubi):
<input type="text" name="UBI" > <br>

City of Tacoma Business License Number:
<input type="text" name="tbl">

</form>

  <br><br>

  <button onclick="goBack()"> Back </button>
  <br>

  <script>
  function goBack() {
      window.history.back();
  }
  </script>


  <form action="/ProjectApp/contactInfo.php">
      <input type="submit" value="Save">
      <input type="submit" value="Save & Next">
  </form>

</body>
</html>
