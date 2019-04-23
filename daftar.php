<?php  

require 'function.php';

if ( isset ($_POST['submit']) ) {
	// jika berhasil daftar
	if ( tambah($_POST) > 0 ) {
		echo "<script>
		alert ('Berhasil Daftar');
		document.location.href = 'login_page.php';
		</script>";
	} else {
		echo "<script>
		alert ('Gagal Daftar');
		document.location.href = 'daftar.php';
		</script>";
	}
}

if ( isset($_POST['login']) ) {
	header ('Location: login_page.php');
}
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="icon" type="img" href="img/happy.png">
	<link rel="stylesheet" type="text/css" href="css/style3.css">
	<title>Daftar Akun Happy Ride</title>
</head>
<body>
	<div class="daftar">
		<h1>Daftar Akun</h1>
		<form action="" method="post">
			<li style="list-style-type: none;">
				<ul>
					<input type="text" name="username" id="username" placeholder="Username" required>
				</ul>
				<ul>
					<input type="password" name="password" id="password" placeholder="Password" required>
				</ul>
				<ul>
					<button type="submit" name="submit">Submit</button>
					<button type="submit" name="login">Login</button>
				</ul>
			</li>
		</form>
	</div>
</body>
</html>