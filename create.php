<?php
session_start();
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $npm = $_POST['npm'];
    $nama = $_POST['nama'];
    $fakultas = $_POST['fakultas'];
    $jurusan = $_POST['jurusan'];
    $kelas = $_POST['kelas'];
    $telepon = $_POST['telepon'];

    $sql = "INSERT INTO data_mahasiswa (npm, nama, fakultas, jurusan, kelas, telepon)
            VALUES (?, ?, ?, ?, ?, ?)";
    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssss", $npm, $nama, $fakultas, $jurusan, $kelas, $telepon);
    
    if ($stmt->execute()) {
        $_SESSION['message'] = "Data berhasil ditambahkan!";
    } else {
        $_SESSION['message'] = "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
    
    header("Location: index.php");
    exit();
}
?>