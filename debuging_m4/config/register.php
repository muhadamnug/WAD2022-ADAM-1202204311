<?php
$showroom=mysqli_connect("localhost", "root", "", "wad_modul4_adam", 3333);
function register($data){
    global $showroom;

    $email = $data["email"];
	$nama = $data["nama"];
	$nohp = $data["nohp"];
	$password = $data["password"];
	$verifikasi = $data["password1"];

    if($password !== $verifikasi){
		echo "
		<script>
			alert('kata sandi berbeda');
		</script>
		";
		header("Location: ../pages/Register-Adam.php");
		exit;
	}

	$query="INSERT INTO user_adam VALUES('', '$nama', '$email', '$password', '$nohp')";
    mysqli_query($showroom, $query);
	return mysqli_affected_rows($showroom);
}

?>