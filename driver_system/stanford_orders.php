<?php include_once("mysqli_connection.php");?>


<div class="container">
<?php
$res=mysqli_query($link, "SELECT * FROM orderStatus WHERE city = 'Stanford' && user_type = 'active'");
while($row=mysqli_fetch_array($res))

{
?>
 



  <div class="box">



order id:<?php echo $row["order_id"];?></br>

City:<?php echo $row["city"];?></br>


</br>


  </div> <!--box-->       

<?php
}

?>

</div>



   <a href="active_orders.php">Back to Cities</a>