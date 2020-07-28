<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	
	<title>your product</title>
</head>
<body>
<h1>My first program in CI</h1>
<table>
	<tr>
		<th>UserName</th>
		<th>PhoneNo.</th>
	</tr>
	<?php foreach ($users as $user ) :?>
	<tr>
		<td><?php echo $user['UserName'];?></td>

		<td><?php echo $user['PhoneNo.'];?></td>
	</tr>
	<?php endforeach; ?>
</table>
</body>
</html>