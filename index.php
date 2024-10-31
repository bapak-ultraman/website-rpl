<?php
// Tentukan username dan password
$username_disimpan = "fajar";
$password_disimpan = "123";

// Cek apakah form login telah disubmit
if (isset($_POST['submit'])) {
// Ambil nilai username dan password dari form
 $username = $_POST['user'];
 $password = $_POST['pass'];

 	// Cek apakah username dan password sesuai
    if ($username === $username_disimpan && $password === $password_disimpan) {
        // Jika login berhasil, arahkan ke halaman lain
        header("Location: beranda.php");
        exit();}
         else {
        // Jika login gagal, tampilkan pesan error
        $error = "Username atau password salah!";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Login</title>
</head>
<body>
	<h2>Login</h2>
	<?php 
	if (isset($error)) 
		{ echo "<p style='color:yellow;'>$error</p>"; } 
	?>
<form method="post" action="">
        <label>Username:</label>
        <input type="text" name="user" required><br><br>
        
        <label>Password:</label>
        <input type="password" name="pass" required><br><br>
        
        <input type="submit" name="submit" value="Masuk">
</form>
</body>
</html>
