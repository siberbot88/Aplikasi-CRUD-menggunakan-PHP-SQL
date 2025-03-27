<?php
include 'koneksi.php';
$npm = $_GET['npm'];

$sql = "DELETE FROM data_mahasiswa WHERE npm = $npm";
if ($conn->query($sql) === TRUE) {
    $_SESSION['message'] = "Data berhasil dihapus!";
} else {
    $_SESSION['message'] = "Error: " . $conn->error;
}

header("Location: read.php");
exit();
?>