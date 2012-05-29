<?php
include './../config.php';

$result = mysql_query("SELECT * from user1 ORDER by id desc");
   $chislo = 6;
 $num_rows = mysql_num_rows($result);

 if ($num_rows<=$chislo) {$num_rows=0;} else {$num_rows = ceil($num_rows/$chislo);}

 if (isset($_GET['p'])) {
 $nav = $_GET['p'];
 }
 else {
 $nav = 0;
 }
 $nav = intval($nav);

 if (!isset($_GET['p'])) {
 $p = 0;
 }
 else {
 $p = $_GET['p']*$chislo - $chislo;
 }
 $nomer = 8;

 $result = mysql_query("SELECT * from user1 ORDER by id asc limit $p, $nomer");

 if (!$result) {
 echo $text_error;
 }
   if (mysql_num_rows($result)==0)
      {
         ?><div class="gradient"><p class="head"></p><blockquote class="alert"><p>посту</p></blockquote><p class="information"></p></div><?
      }
   else
      {
         for ($c=0; $c<mysql_num_rows($result); $c++)
            {
               echo '<div style="width:400px; max-heigth:500px; background-color:#d3d3d3; word-wrap: break-word; border-radius: 6px;  -moz-box-shadow: 0 0 10px rgba(0,0,0,0.2); /* ??? Firefox */
    -webkit-box-shadow: 0 0 10px rgba(0,0,0,0.2); /* ??? Safari ? Chrome */
    box-shadow: 0 0 10px rgba(0,0,0,0.2); /* ????????? ???? */">';
               $new = mysql_fetch_array($result);
               echo '<blockquote class="news"><p>'.(htmlspecialchars($new["from2"], ENT_QUOTES)).'</p></blockquote>';
               echo '<p>'.(htmlspecialchars($new["koment2"], ENT_QUOTES)).'</p>';
               echo '</div>';
            }
      }
      // навигатор
      if (mysql_num_rows($result)==0 || $num_rows<1) {} else {
                  echo '<div style="border-radius: 6px; background: #055; padding: 3px; text-align: center; width:20%;">';
                  for ($i=1; $i<=$num_rows; $i++) {
                  if ($i != $nav) {
                  echo '<span><a href="'.$PHP_SELF.'?p='.$i.'">'.$i.'</a></span>&nbsp;';
                  }
                  else {
                  echo '<span>'.$i.'</span>&nbsp;';
                  }
                  }
                  echo '</div>';}
				   header('Location: ');
				  ?>