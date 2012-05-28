<?php
$host='localhost';
   $pass='';
   $user='root';
   $db='data';
   $table='user';
                                            
   $b = mysql_connect($host, $user, $pass) or die(mysql_error());
   mysql_select_db($db, $b) or die(mysql_error());
// логин к базе опущен, с ним всё впорядке.

$result = mysql_query("SELECT * from user ORDER by id desc");
   $chislo = 4;
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
 $nomer = 4;

 $result = mysql_query("SELECT * from user ORDER by id asc limit $p, $nomer");

 if (!$result) {
 echo $text_error;
 }
   if (mysql_num_rows($result)==0)
      {
         ?><div class="gradient"><p class="head"></p><blockquote class="alert"><p>База новостей пуста</p></blockquote><p class="information"></p></div><?
      }
   else
      {
         for ($c=0; $c<mysql_num_rows($result); $c++)
            {
               echo '<div class="gradient">';
               $new = mysql_fetch_array($result);
               echo '<blockquote class="news"><p>'.(htmlspecialchars($new["from"], ENT_QUOTES)).'</p></blockquote>';
               echo '<p>'.(htmlspecialchars($new["koment"], ENT_QUOTES)).'</p>';
               echo '<p class="information"><table border="0" cellpadding="0" cellspacing="0" class="infotable"><tr><td style="align: left;" class="author"><span>Автор: '.(htmlspecialchars($new["author"], ENT_QUOTES)).'</span></td><td style="align: right;" class="time"><span>Время добавления: '.$new["date"].'</span></td></tr></table></p>';
               echo '</div>';
            }
      }
      // навигатор теперь тут
      if (mysql_num_rows($result)==0 || $num_rows<1) {} else {
                  echo '<div style="border-radius: 6px; background: #555; padding: 3px; text-align: center;">';
                  for ($i=1; $i<=$num_rows; $i++) {
                  if ($i != $nav) {
                  echo '<span class="pagenavi"><a href="'.$PHP_SELF.'?p='.$i.'">'.$i.'</a></span>&nbsp;';
                  }
                  else {
                  echo '<span class="pagenavi thispage">'.$i.'</span>&nbsp;';
                  }
                  }
                  echo '</div>';}