<?php 
require 'php/koneksi.php';

    if(isset($_POST["daftar"]) ){

        if(daftar($_POST) > 0){
           header("location: beranda.php");
           die;
        } else {
            echo mysqli_error($conn);
        }
    }


    if(isset($_POST["login"]) ) {

        $username = $_POST["username"];
        $password = $_POST["password"]; 

        $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");

        if(mysqli_num_rows($result) === 1){

            $row = mysqli_fetch_assoc($result);
            if (password_verify($password, $row["password"]) ){
                header("location: beranda.php");
                exit;
            } else {
                echo "#alert-fail";
            }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk Ideasia</title>
    <link rel="stylesheet" href="css/loginRegister.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="icon-back">
        <a href="index.php">
            <i class='bx bx-chevron-left'></i>
        </a>
        <div class="back-name"><h3>Back</h3></div>
    </div>
<div class="container" id="container">
	<div class="form-container sign-up-container">
        <form action="" method="post">
            <h1>Create Account</h1><br>
            <input type="text" name="username" id="nama" class= "input-style" placeholder="Username" autocomplete="off" pattern=".{6,}" title="6 characters minimum" required>
            <input type="email" name="email" id="email" class= "input-style" placeholder="Email"  autocomplete="off" required>
            <!-- <div class="select-class">
                <select name="cars" id="provinsi" required>
                    <option value="Provinsi">Provinsi</option>
                    <option value="Riau">Riau</option>
                    <option value="Kepulauan Riau">Kepulauan Riau</option>
                    <option value="Banten">Banten</option>
                </select>
                <select name="cars" id="cars">
                    <option value="volvo">Kota</option>
                    <option value="saab">Serang</option>
                    <option value="mercedes">Tangerang</option>
                    <option value="audi">Cilegon</option>
                </select>
                <select name="cars" id="cars">
                    <option value="volvo">kecamatan</option>
                    <option value="saab">Cipocok</option>
                    <option value="mercedes">Margasana</option>
                    <option value="audi">cipare</option>
                </select>
            </div> -->
            <input type="password" name="password" id="password" class= "input-style" placeholder="Password" autocomplete="off" pattern=".{8,}" title="8 characters minimum" required >
            <button type="submit" name="daftar" id="daftar">Daftar</button>
        </form>
	</div>
	<div class="form-container sign-in-container">
		<form action="" method="post">
			<h1>Login</h1><br>
            <form action="#">
                <input type="text" name="username" id="nama" class= "input-style" placeholder="Username"  autocomplete="off" pattern=".{6,}" title="6 characters minimum" required>
                <input type="password" name="password" id="password" class= "input-style icon-field-hide icon-field-see" placeholder="Password" autocomplete="off" pattern=".{8,}" title="8 characters minimum" required>
                <p id=alert-fail></p>
                <button type="submit" name="login" id="daftar">Login</button>
            </form>
            <div class="line-content">
                <h6 id="line-content">OR REGISTER WITH</h6>
            </div> 
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
                <img src="asset/right-anima.svg" alt="anima-Svg" sizes="40px">
				<h1>Welcome to Idesia</h1>
				<p>Sudah punya Akun? login disini!</p>
				<button class="ghost" id="signIn">Login</button>
			</div>
			<div class="overlay-panel overlay-right">
                <img src="asset/main-anima.svg" alt="anima-Svg" sizes="50px">
				<h1>Welcome Back!</h1>
				<p>Belum Punya Akun? Daftar disini!</p>
				<button class="ghost" id="signUp">Daftar</button>
			</div>
		</div>
	</div>
</div>
<script src="js/script.js"></script>
</body>
</html>