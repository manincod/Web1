<?php
  $prod = $_POST['formDoor'];
  if(empty($aDoor))
  {
   exit;  
  }
  else
  {
    $N = count($aDoor);
    echo("выбрали $N: ");
    for($i=0; $i < $N; $i++)
    {
      echo($aDoor[$i] . " ");
    }
  }
  $kont = $_POST['kontakt'];
   if(!empty($kont)){
    $host='localhost';
   $pass='12345';
   $user='my';
   $db='data';
 
                                            
   $b = mysql_connect($host, $user, $pass) or die(mysql_error());
   mysql_select_db($db, $b) or die(mysql_error());
   
                $query = mysql_query("INSERT INTO `user` (`kont`, `prod`) VALUES ('" . $kont . "','" . $prod . "')") or die(mysql_error());
	

           
   }
?>