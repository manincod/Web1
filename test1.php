<?php
    $enter = $_POST['enterd'];
    $from = $_POST['from']; 
	
if(empty($enter) or empty($from)){ echo 'enpty';}
   $host='localhost';
   $pass='';
   $user='root';
   $db='data';
                                            
   $b = mysql_connect($host, $user, $pass) or die(mysql_error());
   mysql_select_db($db, $b) or die(mysql_error());
   
	
  
   
	if (isset($_POST['start']))
	{
	$query = mysql_query("INSERT INTO `user` (`koment`, `from`) 
                        VALUES ('" . mysql_real_escape_string($enter) . "', '" . mysql_real_escape_string($from) . "')") or die(mysql_error());
         
   header('Location: test2.php');
   }
  
 
?>