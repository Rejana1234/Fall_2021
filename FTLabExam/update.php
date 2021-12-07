<!DOCTYPE html>
<html>
<head>
    
    <title>Update Employee</title>
    
</head>
<body>
<?php
    require('db.php');
    session_start();
    
    if (isset($_POST['Name'])) {
        $Name = stripslashes($_REQUEST['Name']);    
        $Name = mysqli_real_escape_string($con, $Name);
        $Department = stripslashes($_REQUEST['Department']);    
        $Department = mysqli_real_escape_string($con, $Department);
        $JoiningDate = striplashes("Y-m-d H:i:s");
        $JoiningDate = mysqli_real_escape_string("Y-m-d H:i:s");
        $Salary = stripslashes($_REQUEST['Salary']);    
        $Salary = mysqli_real_escape_string($con, $Salary);
        $query    = "SELECT * FROM `employee WHERE Name='$Name'. ";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['username'] = $username;
            
           /* header("Location: dashboard.php");*/
        } else {
            echo "<form>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='update.php'>Update</a> again.</p>
                  </form>";
        }
    } else {
?>
    <form method="post" name="update">
        <h1>Update Employee</h1>
        <input type="text" class="Update-input" name="Name" placeholder=" Name" autofocus="true"/><br><br>
        <input type="text" class="Update-input" name="Department" placeholder="Department"/><br><br>
         <input type="Date" class="Update-input" name="JoiningDate" placeholder="JoiningDate"/><br><br>
          <input type="number" class="Update-input" name="Salary" placeholder="Salary"/><br><br>
        <input type="submit" value="Update" name="submit" class="update-button"/>
        
  </form>
<?php
    }
?>
</body>
</html>
