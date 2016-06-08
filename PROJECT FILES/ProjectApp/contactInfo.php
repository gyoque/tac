
<!DOCTYPE html>
<html>
<body>

<h1> Contact Information </h1>

<p> First we will create an account so that you may easily
    return to your application. </p>

<p>Who can we contact with questions about the project or application?</p>

<form action="input_contactInfo.php" method="post">
<section>
First Name:
<input type="text" name="first" > <br>
Last Name:
<input type="text" name="last" > <br>
</section>

<br>
<section>
Address of Contact<br><br>

Street:
<input type="text" name="cStreet"><br>

City:
<input type="text" name="cCity"><br>

State:
<input type="text" name="cState" style="width: 32px;" required minlength='2' maxlength='2'><br>

Zip:
<input type="integer" name="cZip"><br>

</section>
<br>

<section>
Day Time Phone Number:<br>
(No Spaces or Dashes)<br>
<input type="integer" name="cPhone" placeholder="XXXXXXXXXX"> <br>
</section>
<br>
<section>
Email: (This will also serve as your username)
<input type="text" name="cEmail" required><br>

Password:
<input type="password" name="password" required><br>
</section>

<br>

<section>
Title of Project:
<input type="text" name="projTitle" required> <br>
</section>


<br><br>
<button onclick="goBack()"> Back </button>
<br>

<input type="submit" value="Save">
<input type="submit" value="Save & Next">

</form>


<script>
function goBack() { window.history.back(); }
</script>

</body>
</html>
