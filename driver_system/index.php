<?php include_once("mysqli_connection.php");?>
<?php
//index.php
include('database_connection.php');

if(!isset($_SESSION["type"]))
{
 header("location: login.php");
}

?>
<!DOCTYPE html>
<html>
 <head>
  <title>Ruzi </title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
 
 
 
 
 </head>
 
 <body>
  <br />
  <div class="container">
   <h2 align="center">Ruzi </h2>
   <br />
   <div align="right">
    <a href="logout.php">Logout</a>
   </div>
   <br />
   <?php
   
   if($_SESSION["type"] =="user")
   {
    
   include_once("active_orders.php");
  

   }
   else if($_SESSION["type"] =="master")
   {
   ?>
   
   
   
   
    <hr>
</br>


<?php include_once("add_vendor.php");?>
</br>
<hr>
</br>
<?php include_once("display_vendor2.php");?>
<hr>
</br>
<h2>Ruzi Drivers Online</h2>
   <div class="panel panel-default">
    <div class="panel-heading">Online Drive Details</div>
    <div id="user_login_status" class="panel-body">

    </div>
   </div>
   
   
   <?php
   }
   else {
   header("location: login.php");
   }
   ?>
  </div>
 </body>
</html>

<script>
$(document).ready(function(){
<?php
if($_SESSION["type"] == "user")
{
?>
function update_user_activity()
{
 var action = 'update_time';
 $.ajax({
  url:"action.php",
  method:"POST",
  data:{action:action},
  success:function(data)
  {

  }
 });
}
setInterval(function(){ 
 update_user_activity();
}, 3000);


<?php
}
else
{
?>
fetch_user_login_data();
setInterval(function(){
 fetch_user_login_data();
}, 3000);
function fetch_user_login_data()
{
 var action = "fetch_data";
 $.ajax({
  url:"action.php",
  method:"POST",
  data:{action:action},
  success:function(data)
  {
   $('#user_login_status').html(data);
  }
 });
}
<?php
}

?>

});
</script>














