<?php 
session_start();
if(isset($_SESSION['uname'])){
	echo "Welcome:" .$_SESSION['uname']. ".your password: ". $_SESSION['pass'];


}else{
	echo "<script>location.href='session1.php'</script>";
}
if (isset($_POST['logout'])) {
	session_unset();
	session_destroy();
	echo "<script>location.href='session1.php'</script>";
}
?>
<!DOCTYPE html>
<html lang="en-us">
<head>
	<title></title>
</head>
<body>
	<h1>Welcome on seesion page</h1>
	<form method="POST" action="">
		<input type="submit" name="logout" value="logout">
	</form>
</body>
</html>