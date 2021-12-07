<!DOCTYPE html>
<html>
<head>
    
    <title>Search</title>
    
</head>
<body>
<?php
    require('db.php');
    session_start();
    
    if (isset($_POST['ID'])) {
        $ID = stripslashes($_REQUEST['ID']);    
        $ID = mysqli_real_escape_string($con, $ID);
        
        $query    = "SELECT * FROM `employee` WHERE ID='$ID' . ";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['ID'] = $ID;
            
            /*header("Location: dashboard.php");*/
        } else {
            echo "<form>
                  <h3>Incorrect ID.</h3><br/>
                  <p class='link'>Click here to <a href='search.php'>Search</a> again.</p>
                  </form>";
        }
    } else {
?>
    <form method="post" name="search">
        <h1>Search</h1>
        <input type="number" class="search-input" name="ID" placeholder=" ID" autofocus="true"/><br><br>
        <p><a href="employee_update.php">New Update</a></p>
  </form>
<?php
    }
?>
</body>
</html>
