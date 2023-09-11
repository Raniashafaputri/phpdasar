<?php 
     include 'connect.php'; 
     session_start(); // Pastikan Anda sudah memanggil session_start() di file lain yang memproses login  
  
     if (!isset($_SESSION['email'])) {  
         // Jika pengguna belum login, tampilkan pesan kesalahan dan arahkan mereka kembali ke halaman login  
         echo "<script>alert('Maaf, Anda belum login!');</script>";  
         echo "<script>window.location.href = 'login.php';</script>"; // Gantilah 'login.php' dengan nama halaman login Anda  
         exit;  
     } 
  
     $get_data = "select * from data where id=$id"; 
     $result_data = mysqli_query($conn, $get_data); 
     $row = mysqli_fetch_assoc($result_data); 
     $nama = $row['nama']; 
     $alamat = $row['alamat']; 
     $email = $row['email']; 
     $umur = $row['umur']; 
     $tempat_lahir = $row['tempat_lahir']; 
     if (isset($_POST['submit'])) { 
        $nama = $_POST['nama']; 
        $alamat = $_POST['alamat']; 
        $email = $_POST['email']; 
        $umur = $_POST['umur']; 
        $tempat_lahir = $_POST['tempat lahir']; 
        $sql = "update data set id=$id, nama='$nama', alamat='$alamat',email='$email', umur='$umur', tempat lahir='$tempat_lahir'  where id=$id"; 
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous"> 
</head> 
 
<body class="min-vh-100 d-flex align-items-center"> 
    <div class="card w-50 m-auto p-3"> 
        <h3 class="text-center">Update</h3> 
        <form method="post"> 
            <div class="mb-3"> 
                <label for="nama" class="form-label">Nama toko</label> 
                <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $nama_toko; ?>"> 
            </div>
            <div class="mb-3"> 
                <label for="Alamat" class="form-label">Alamat toko</label> 
                <input type="text" class="form-control" id="Alamat" name="Alamat" value="<?php echo $Alamat_toko; ?>"> 
 
            <div class="mb-3"> 
                <label for="Jenis" class="form-label">Jenis batik</label> 
                <input type="text" class="form-control" id="alamat" name="Jenis" value="<?php echo $Jenis_Batik; ?>"> 
            </div> 
            <div class="mb-3"> 
                <label for="Harga" class="form-label">Harga</label> 
                <input type="text" class="form-control" id="Harga" name="Harga" value="<?php echo $Harga_Batik; ?>"> 
            </div> 
            <div class="mb-3"> 
                <label for="" class="form-label">motif</label> 
                <input type="motif" class="form-control" id="motif" name="motif" value="<?php echo $motif_batik; ?>"> 
            </div> 
            <button type="submit" class="btn btn-primary" name="submit">Submit</button> 
        </form> 
    </div> 
</body> 
 
</html>
