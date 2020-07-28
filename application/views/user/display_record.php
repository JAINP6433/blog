<!DOCTYPE html>
<html>
<head>
<title>Delete records</title>
</head>
 
<body>
<table width="600" border="1" cellspacing="5" cellpadding="5">
  <tr style="background:#CCC">
    <th>id</th>
    <th>title</th>
    <th>Update</th>
  </tr>
  <?php
 
  foreach($data as $row)
  {
  echo "<tr>";
  echo "<td>".$row->id."</td>";
  echo "<td>".$row->title."</td>";
   $id=$row->id;?>
   <td><a href="update/<?php echo ($id) ;?>">update</a></td>
 </tr>
 <?php
 
  }
   ?>
</table>
 
</body>
</html>
