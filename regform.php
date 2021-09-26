<?php include "task_1_result/result_1.php"; ?>

<!DOCTYPE html>
<html>
<body>
<h1>Registration form </h1>
<form action="" method="post">
First Name: <input type="text" name="fname"> <?php echo $validatename; ?>
<br>
<br>
Last Name: <input type="text" name="lname"> <?php echo $validatenme; ?>
<br>
<br>
Age: <input type="number" name="age"> <?php echo $validateage; ?>
<br>
<br>

<p>Designation:</p>
  <input type="radio" id="Junior programmer" name="Designation" value="Junior programmer">
  <label for="Junior programmer">Junior programmer</label><br>
  <input type="radio" id="Senior programmer" name="Designation" value="Senior programmer">
  <label for="Senior programmer">Senior programmer</label><br>
  <input type="radio" id="Project lead" name="Designation" value="Project lead">
  <label for="Project lead">Project lead</label>
  <br>
  <?php echo $validateradio; ?>
<br>
<br>

<p>Preferred Language</p>
<br>

<input type="checkbox" id="language1" name="language1" value="JAVA">
 JAVA<br>
<input type="checkbox" id="language2" name="language2" value="PHP">
PHP<br>
<input type="checkbox" id="language3" name="language3" value="C++">
 C++<br>
<br>
<?php echo $validatecheckbox; ?>

<?php echo $l1;?>

<?php echo $l2;?>

<?php echo $l3;?>
<br>
Email: <input type="text" name="email"> <?php echo $validateemail; ?>
<br>
<br>
Password: <input type="number" name="password"> <?php echo $validatepassword; ?>
<br>


<input type="submit" value="SUBMIT">
</form>
</body>
</html>
