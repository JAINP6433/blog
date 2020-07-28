<!DOCTYPE html>
<html>
<head>
<title>Student Registration form</title>
</head>

<body>
	<form method="post">
		<table width="600" align="center" border="1" cellspacing="5" cellpadding="5">
	<tr>
    <td colspan="2" style="text-align: center;"><?php echo $error; ?><h1>Register Form</h1></td>
	</tr>	
  <tr>
    <td >Enter Your Name </td>
    <td><input type="text" name="name" placeholder="Enter Your Name" required /></td>
  </tr>
  
  <tr>
    <td>Enter Your Email </td>
    <td><input type="text" name="email" placeholder="Enter Your Email" required /></td>
  </tr>
  
  <tr>
    <td>Enter Your Password </td>
    <td><input type="password" name="pass" placeholder="Enter Your Password" required /></td>
  </tr>

  <tr>
    <td>Enter Your Mobile </td>
    <td><input type="text" name="mobile" placeholder="Enter Your Mobile" required/></td>
  </tr>
  
  <tr>
    <td>Select Your Course </td>
    <td>
	<select name="course">
		<option value="">Select Course</option>
		<option>PHP</option>
		<option>Java</option>
    <option>HTML</option>
    <option>CSS</option>
    <option>Wordpress</option>
	</select>
	</td>
  </tr>
  
  <tr>
    <td colspan="2" align="center">
	<input type="submit" name="register" value="Submit"/></td>
  </tr>
</table>

	</form>
</body>
</html>