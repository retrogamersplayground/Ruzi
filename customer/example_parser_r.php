<?php
if( isset($_POST['n']) && isset($_POST['e']) && isset($_POST['d']) && isset($_POST['dl']) && isset($_POST['sa']) && isset($_POST['c']) && isset($_POST['st']) && isset($_POST['z']) && isset($_POST['m']) && isset($_POST['mc']) && isset($_POST['ss']) ){
	$n = htmlentities($_POST['n']); // HINT: use preg_replace() to filter the data
	$e = htmlentities($_POST['e']);
	$d = htmlentities($_POST['d']);
	$dl = htmlentities($_POST['dl']);
	$sa = htmlentities($_POST['sa']);
	$c = htmlentities($_POST['c']);
	$st = htmlentities($_POST['st']);
	$z = htmlentities($_POST['z']);
	$m = htmlentities($_POST['m']);
	$mc = htmlentities($_POST['mc']);
	$ss = htmlentities($_POST['ss']);
	
	
	$to = "neilfloyd99@gmail.com";	
	$from = $e;
	$subject = 'Potential Driver Contact';
	$message = htmlentities('<b>Name:</b> '.$n.' <br><b>Email:</b> '.$e.' <br><b>DOB:</b> '.$d.' <br><b>Drivers License Number:</b> '.$dl.' <br><b>Street Address:</b> '.$sa.' <br><b>City:</b> '.$c.' <br><b>State:</b> '.$st.' <br><b>Zip Code:</b> '.$z.' <br><b>Mobile Number:</b> '.$m.' <br><b>Mobile Carrier:</b> '.$mc.' <br><b>Social Security Number:</b> '.$ss.'');
	$headers = htmlentities("From: $from\n");
	$headers .= "MIME-Version: 1.0\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1\n";
	if( mail($to, $subject, $message, $headers) ){
		echo "success";
	} else {
		echo "The server failed to send the message. Please try again later.";
	}
}
?>