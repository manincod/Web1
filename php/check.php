<form action="admin.php" method="post">
Продукция на продаджу<br />
<input type="checkbox" name="formDoor[]" value="big box" />пак1<br />
<input type="checkbox" name="formDoor[]" value="littel box" />пак5<br />
<input type="checkbox" name="formDoor[]" value="bannana" />пак4<br />
<input type="checkbox" name="formDoor[]" value="chocolet" />пак3<br />
<input type="checkbox" name="formDoor[]" value="appel" />пак2<br/>
вписати данни для обратного звязку<br />
<textarea name='kontakt' cols='30' rows='6'></textarea><br />
<input type="submit" name="formSubmit" value="Submit" />
</form>


<?php
  $aDoor = $_POST['formDoor'];
  if(empty($aDoor))
  {
    
  }
  else
  {
    $N = count($aDoor);
    echo("вы выбрали $N door(s): ");
    for($i=0; $i < $N; $i++)
    {
      echo($aDoor[$i] . " ");
    }
  }
?>
	
