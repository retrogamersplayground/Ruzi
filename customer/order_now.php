<html lang="eng">
<head>
  
    <meta charset="uft-8">
  
  

  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
   <link rel="stylesheet" href="/stylesheet.css">                                                                                                  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>                                                                                                  
  
  
  
  
<style>






  a:link {color: #212121; text-decoration: none; }

a:visited {color: #212121; text-decoration: none; }
    a:hover {color: #5dfc0a; text-decoration: none; }

    
   </style>
 </head>
  
<?php include_once("template_navigation.php");?>
  



 <div class="container-fluid background-color text-center">

  


      
        

    
    
    
       

    
 <body> 

  
 


After calling to order your food please complete this form to request delivery!
<br>
<hr>
<center><?php include_once("order2.php");?></center>
</div>
</br>

</hr>
<form align="center" action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="DK2NKM5HLZJYE">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_paynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
</hr>
<br>
<br>
<?php include_once("template_footer.php");?>
    </body>
 </div>
</html>