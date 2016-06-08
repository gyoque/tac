<!DOCTYPE html>
<html>
<body>


<h1> PRoject Sumamry </h1>

<form  action="">
Arts Projects Funding Requested (must be between $1000 and $5000)
<input type="integer" name="fundRequest" > <br> <br>

Project Title:
<input type="text" name="title" > <br> <br>

Project Dates <br>

Start:
<input type="text" name="startdate" value="">

&nbsp; &nbsp; &nbsp;

End:
<input type="text" name="enddate" value="">


</form>

  <br><br>

  <button onclick="goBack()"> Back </button>
  <br>

  <script>
  function goBack() {
      window.history.back();
  }
  </script>


  <form action="/ProjectApp/projDescription.php">
      <input type="submit" value="Save">
      <input type="submit" value="Save & Next">
  </form>

</body>
</html>
