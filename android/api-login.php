<?php
include 'koneksi.php';

$email = $_GET['email'];
$password = $_GET['password'];

// Validasi input
if (!empty($email) && !empty($password)) {
    // Ambil password hash dari database berdasarkan email
    $cek = "SELECT password FROM user WHERE email = '$email'";
    $msql = mysqli_query($koneksi, $cek);

    if ($msql && mysqli_num_rows($msql) > 0) {
        $row = mysqli_fetch_assoc($msql);
        $hashedPassword = $row['password'];

        // Verifikasi password yang dimasukkan dengan hash di database
        if (password_verify($password, $hashedPassword)) {
            echo "Selamat Datang";
        } else {
            echo "Login Gagal";
        }
    } else {
        echo "Email tidak terdaftar";
    }
} else {
    echo "Ada Data Yang Masih Kosong";
}
?>
