<?php
$validatename="";
$validatename="";
$validateage="";
$validateradio="";
$validatecheckbox="";
$validateemail="";
$validatepassword="";
$l1=$l2=$l3="";
$name=$name=$age=$Designation=$email=$password="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$name=$_REQUEST["fname"];
$name=$_REQUEST["lname"];
$age=$_REQUEST["age"];
$email=$_REQUEST["email"];
$password=$_REQUEST["password"];
if(empty($_REQUEST["fname"]) || (strlen($_REQUEST["fname"])<3))
{
    $validatename= "you must enter name";

}
else
{
    $name=$_REQUEST["fname"];
}
if(empty($_REQUEST["lname"]) || (strlen($_REQUEST["lname"])<3))
{
    $validatename= "you must enter name";

}
else
{
    $name=$_REQUEST["lname"];
}
if(empty($_REQUEST["age"]) || (strlen($_REQUEST["age"])<3))
{
    $validateage= "you must enter age";

}
else
{
    $age=$_REQUEST["age"];
}

if(empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email))
{
    $validateemail="you must enter email";
}
else{
    $validateemail= "your email is ".$email;
}
if(empty($_REQUEST["password"]) || (strlen($_REQUEST["password"])<3))
{
    $validatepassword= "you must enter password";

}
else
{
    $password=$_REQUEST["password"];
}
if(isset($_REQUEST["Designation"]))
{
    $validateradio= $_REQUEST["Designation"];
}
else{
    $validateradio= "please select at least one radio";
}

}
if(!isset($_REQUEST["language1"])&&!isset($_REQUEST["language2"])&&!isset($_REQUEST["language3"]))
{
    $validatecheckbox = "please select at least one checkbox";
    
}
else{
   if(isset($_REQUEST["language1"]))
   {
       $l1= $_REQUEST["language1"];
   }
   if(isset($_REQUEST["language2"]))
   { 
       $l2= $_REQUEST["language2"];
   }
   if(isset($_REQUEST["language3"]))
   {
    $l3= $_REQUEST["language3"];
   }
}

?>
