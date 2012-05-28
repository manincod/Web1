<form action="check.php" method="post">
Which buildings do you want access to?<br />
<input type="checkbox" name="formDoor[]" value="big box" />Acorn Building<br />
<input type="checkbox" name="formDoor[]" value="littel box" />Brown Hall<br />
<input type="checkbox" name="formDoor[]" value="bannana" />Carnegie Complex<br />
<input type="checkbox" name="formDoor[]" value="chocolet" />Drake Commons<br />
<input type="checkbox" name="formDoor[]" value="appel" />Elliot House
<input type="submit" name="formSubmit" value="Submit" />
</form>


<?php
  $aDoor = $_POST['formDoor'];
  if(empty($aDoor))
  {
    echo("You didn't select any buildings.");
  }
  else
  {
    $N = count($aDoor);
    echo("You selected $N door(s): ");
    for($i=0; $i < $N; $i++)
    {
      echo($aDoor[$i] . " ");
    }
  }
?>
	
