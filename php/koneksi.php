<?php 
    $conn = mysqli_connect("localhost", "root", "", "idesia");

    //cek koneksi
    if(mysqli_connect_errno()){
        echo "Koneksi ke database gagal : " . mysqli_connect_error();
    }


function daftar($data) {
    global $conn;

    $username = strtolower(stripcslashes($data["username"]));
    $email =strtolower($data["email"]);
    $password = mysqli_real_escape_string($conn, $data["password"]);

    // Enkripsi Password
    $password = password_hash($password, PASSWORD_DEFAULT);


    // Menambahkan User baru ke database
    mysqli_query($conn, "INSERT INTO users ("username", "email", "password") VALUES('$username', '$email, '$password')");

    return mysqli_affected_rows($conn);

}
?>