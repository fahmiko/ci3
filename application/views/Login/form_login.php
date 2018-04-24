<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
echo validation_errors();
echo form_open('Login/proses_login');
?>

Username : <input type="text" name="username">
Password : <input type="password" name="password">
<input type="submit">

</body>
</html>

