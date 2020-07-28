<!DOCTYPE html>
<html>
<head>
<title>Update Data</title>
</head>
 
<body>
 <?php

  foreach($data as $row)
  {
  ?>
	<form method="post">
		<table width="600" border="1" cellspacing="5" cellpadding="5">
  <tr>
    <td width="230">Enter title</td>
    <td width="329"><input type="text" name="title" value="<?php echo $row->title; ?>"/></td>
  </tr>
  
  <tr>
    <td colspan="2" align="center">
	<input type="submit" name="update" value="Update_Records"/></td>
  </tr>
</table>
	</form>
	<?php } ?>
</body>
</html>