<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	
	<title>My product</title>
</head>
<body>
<h1>My Profile </h1>
<table>
	<tr>
		<th>id</th>
		<th>FirstName</th>
		<th>LastName.</th>
		<th>Email</th>
		<th>Password</th>
		<th>PhoneNo</th>
		<th>Age</th>
	</tr>
	<?php foreach ($userData as $user ) :?>
	<tr>
		<td><?php echo $id = $user->id;?></td>
	    <td><?php echo $FirstName=$user->FirstName;?></td>
        <td><?php echo $LastName=$user->LastName;?></td>
		<td><?php echo $Email= $user->Email;?></td>
        <td><?php echo $Password=$user->Password;?></td>
        <td><?php echo $PhoneNo=$user->PhoneNo;?></td>
        <td><?php echo $Age=$user->Age;?></td>


	</tr>
	<?php endforeach; ?>
</table>
</body>
</html>
