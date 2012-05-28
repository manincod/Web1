<?php
 $host='localhost';
   $pass='12345';
   $user='my';
   $db='data';
 
                                            
   $b = mysql_connect($host, $user, $pass) or die(mysql_error());
   mysql_select_db($db, $b) or die(mysql_error());
   
	
	
	
	$result = mysql_query("SELECT * FROM user");      
	
	while ($rows = mysql_fetch_assoc($result))
	{
	   $numb = $rows['id'];
	   echo '<form action=\'\' method=\'POST\'>
	   <table border=\'1\' width=\'auto\' height=\'auto\'>
	  FROME:' . $rows['from'] . '
	   <tr><td>' . nl2br($rows['koment']) . ' </td> 
			  <input type=\'submit\' value=\'Delete\' name=\'dele1[' . $rows['id'] . ']\' style=\'position:absolute; left:200px;\'></tr>
               <input type=\'submit\' value=\'Send\' name=\'send1[' . $rows['id'] . ']\' style=\'position:absolute; left:260px;\'></tr>
		   </table>
           </form>';
	      
	                    
	}
       
	
	 if(isset($_POST['dele1']))
	 {
		 foreach ($_POST['dele1'] as $key => $id)
		 {
			$del_id = $key;	 
		 }
    	$deli = mysql_query("DELETE FROM `user` WHERE `id` = '" . $del_id ."'") or die(mysql_error());
 		//var_dump($del_id);  
		if ($deli)
		{
			//header('refresh: 1; url: test3.php');
			echo '';
		}
		else
			echo '' . mysql_error();
    }                 
     
	 if(isset($_POST['send1'])){
  foreach($_POST['send1'] as $key=>$id){
          $send_id=$key;    
         }
    $res = mysql_query("SELECT * FROM `user` WHERE `id`='" . $send_id ."'");
	 $fet = mysql_fetch_assoc($res);
	  $on = $fet['koment'];
	  $tw = $fet['from'];
	mysql_query("INSERT INTO `user1` (`koment2`, `from2`) VALUES ('" . $on . "', '" . $tw . "')") or die(mysql_error());
	
	 
	 }
	 echo 'првпрварвр';
      
	 //$row = mysql_fetch_row(mysql_query("SELECT * FROM `user` WHERE `id`='$send_id'"));
//mysql_query("INSERT INTO `user2` VALUES('".$row[from]."')");
	 
	  
	  //$res = mysql_query("SELECT * FROM `user` WHERE `id`='" . $send_id ."'");
	  //$fet = mysql_fetch_assoc($res);
	     //$on = $fet['koment'];
	     //$tw = $fet['from'];
	    //mysql_query("INSERT INTO `user1` (`koment2`, `from2`) VALUES ('" . $on . "', '" . $tw . "')") or die(mysql_error());

		
		//mysql_query("INSERT INTO user1 (from2, koment2) SELECT from, koment WHERE id = $send_id");
		
		
		//$query = sprintf("SELECT `koment`, `from` FROM `user`
    //WHERE `id` = '" . $send_id ."'",
    //mysql_real_escape_string($rows['from']),
    //mysql_real_escape_string($rows['koment']));
    //mysql_query($query);
	//mysql_query("INSERT INTO `user1` (`koment2`, `from2`) SELECT * FROM `user` WHERE `id` ='" . $send_id."'") or die(mysql_error());

//mysql_query("INSERT INTO `user1` SELECT * FROM `user` WHERE `id` ='" . $send_id."'") or die(mysql_error());
//mysql_query("INSERT INTO `user1` (`koment2`, `from2`) VALUES ('" . $rows['koment'] . "', '" . $rows['from']. "')") or die(mysql_error());
      ?>     


