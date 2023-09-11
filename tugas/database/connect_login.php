<?php
$servername = "localhost:3306";
$username_db = "root";
$password_db = ""; // Update this with your actual database password
$database_name = "db_sekolah";

$semail = $_POST['email'];
$spassword = $_POST['password'];

$sconn = new mysqli($servername, $username_db, $password_db, $database_name);

if ($sconn->connect_error) {
    die("koneksi database gagal: " . $sconn->connect_error);
} else {
    $stmt = $sconn->prepare("SELECT * FROM admin WHERE email = ?");
    $stmt->bind_param("s", $semail);
    $stmt->execute();
    $stmt_result = $stmt->get_result();
    if ($stmt_result->num_rows > 0) {
        $data = $stmt_result->fetch_assoc();
        if ($data['password'] === $spassword) {
            echo "<h2>Login Berhasil, Halo " . $data['username'] . "</h2>";
        } else {
            echo "<h2>Email Atau Password salah</h2>";
        }
    } else {
        echo "<h2>Email Atau Password salah</h2>";
    }
}
?>
