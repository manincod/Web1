<form action="admin.php" method="post">
��������� �� ��������<br />
<input type="checkbox" name="formDoor[]" value="big box" />���1<br />
<input type="checkbox" name="formDoor[]" value="littel box" />���5<br />
<input type="checkbox" name="formDoor[]" value="bannana" />���4<br />
<input type="checkbox" name="formDoor[]" value="chocolet" />���3<br />
<input type="checkbox" name="formDoor[]" value="appel" />���2<br/>
������� ����� ��� ��������� ������<br />
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
    echo("�� ������� $N door(s): ");
    for($i=0; $i < $N; $i++)
    {
      echo($aDoor[$i] . " ");
    }
  }
?>
	
