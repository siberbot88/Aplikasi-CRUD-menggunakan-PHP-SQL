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
    
    $sql = "UPDATE data_mahasiswa SET 
            nama = ?, 
            fakultas = ?, 
            jurusan = ?, 
            kelas = ?, 
            telepon = ?
            WHERE npm = ?";
    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssi", $nama, $fakultas, $jurusan, $kelas, $telepon, $npm);
    
    if ($stmt->execute()) {
        $_SESSION['message'] = "Data berhasil diupdate!";
    } else {
        $_SESSION['message'] = "Error: " . $stmt->error;
    }
    
    header("Location: read.php");
    exit();
}
?>