<html>
	<head>
		<title>variabel</title>
	</head>
	
	<body>
		<h1> Buku Tamu</h1>
		<form method='POST' action='variabel.php'>
			<p>Nama :<input type='text' name='nama' size='20'></p>
			<p>Email :<input type='text' name='email' size='30'></p>
			<p>Komentar :<textarea name='komentar' cols='30' rows='3'></textarea></p>
			<p><input type='submit' value='Kirim' name='submit'></p>
			
			<?php
			error_reporting (E_ALL ^ E_NOTICE);
			$nama = $_POST['nama'];
			$email = $_POST['email'];
			$komentar = $_POST['komentar'];
			$submit = $_POST['submit'];
			
			if($submit){
			echo "Nama : $nama";
			echo "</br>Email : $email";
			echo "</br>Komentar : $komentar";
			}
			?>
		
		</form>
	</body>
</html>