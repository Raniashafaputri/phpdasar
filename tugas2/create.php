<?php 
session_start();// Pastikan Anda sudah memanggill session_start() di file lain yang memproses login

// if (!isset($_SESSION['email'])) {
//     // Jika pengguna belum login,tampilkan pesan kesalahan dan arahkan meeka kembali ke halangan login
//     echo "<script>alert>('Maaf, Anda belum login!');</script>";
//     echo "<script>window.location.href = 'login.php';</script>";// Gantilah 'login.php' dengan nama halaman login Anda
//     exit;
// }

if (isset($_POST['submit'])) { 
    $nama_sekolah = $_POST['nama']; 
    $alamat_sekolah = $_POST['alamat']; 
    $sql = "INSERT INTO sekolah(nama_sekolah, alamat_sekolah) VALUES('$nama_sekolah', '$alamat_sekolah')"; 
    $result = mysqli_query($conn, $sql); 
    if ($result) { 
        header('location:read.php'); 
    } else { 
        die($conn->connect_error); 
    } 
} 
?> 
<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Document</title> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous"> 
</head> 
<body class="min-vh-100 d-flex align-items-center"> 
    <div class='card w-50 m-auto p-3'> 
        <h3 class="text-center ">Aneka ragam baju batik</h3> 
        <form method="post"> 
            <div class="mb-3"> 
                <label for="nama" class="form-label">Nama toko</label> 
                <input type="text" class="form-control" id="nama" name="nama"> 
            </div> 
            <div class="mb-3"> 
                <label for="alamat" class="form-label">Alamat toko</label> 
                <input type="text" class="form-control" id="alamat" name="alamat"> 
            </div> 
            <div class="mb-3"> 
                <label for="jenis" class="form-label">Jenis batik</label> 
                <input type="text" class="form-control" id="jenis" name="jenis"> 
            </div>
            <div class="mb-3"> 
                <label for="Harga" class="form-label">Harga batik</label> 
                <input type="text" class="form-control" id="Harga" name="Harga"> 
            </div>
            <div class="mb-3"> 
                <label for="Motif" class="form-label">Motif batik</label> 
                <input type="text" class="form-control" id="Motif" name="Motif"> 
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button> 
        </form> 
    </div> 
</body> 
</html>
