<?php

include 'koneksi.php';

// Ambil data dari form
$nama = $_POST['nama'];
$password = $_POST['password'];
$alamat = $_POST['alamat'];
$email = $_POST['email']; 
$no = $_POST['no']; // Tambahkan no (nomor telepon)
$gender = $_POST['gender']; // Tambahkan gender

// Query untuk mengecek apakah email sudah digunakan
$queryRegister = "SELECT * FROM user WHERE email = '".$email."'";
$msql = mysqli_query($koneksi, $queryRegister);
$result = mysqli_num_rows($msql);

// Pastikan semua data diisi
if (!empty($nama) && !empty($password) && !empty($alamat) && !empty($email) && !empty($no) && !empty($gender)) {

    if ($result == 0) {
        // Enkripsi password menggunakan password_hash
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Query INSERT dengan tambahan kolom no dan gender
        $regis = "INSERT INTO user (nama, password, alamat, email, no, gender, role)
                  VALUES ('$nama', '$hashedPassword', '$alamat', '$email', '$no', '$gender', 'customer')";

        $msqlRegis = mysqli_query($koneksi, $regis);

        if ($msqlRegis) {
            echo "Daftar Berhasil";
        } else {
            echo "Gagal Mendaftarkan Pengguna";
        }
    } else {
        echo "Email Sudah Digunakan";
    }
} else {
    echo "Semua Data Harus Di Isi Lengkap";
}
?>
