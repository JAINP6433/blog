
<html>
<head>
<title>My Form</title>
</head>
<body>
<form method="post">
<h5>Username</h5>
<input type="text" name="uname" value="" size="50" />
<?php echo form_error('uname');?>
<h5>Password</h5>
<input type="text" name="password" value="" size="50" />
<?php echo form_error('password');?>

<div><input type="submit" value="Submit" /></div>

</form>

</body>
</ht