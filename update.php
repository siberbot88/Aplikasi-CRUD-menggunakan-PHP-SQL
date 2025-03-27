<?php
include 'koneksi.php';
$npm = $_GET['npm'];
$result = $conn->query("SELECT * FROM data_mahasiswa WHERE npm = $npm");
$data = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen p-8">
    <div class="max-w-2xl mx-auto bg-white rounded-lg shadow-md p-6">
        <h1 class="text-2xl font-bold mb-6">Edit Data Mahasiswa</h1>
        
        <form action="update_process.php" method="POST">
            <input type="hidden" name="npm" value="<?= $data['npm'] ?>">
            
            <div class="grid grid-cols-1 gap-6">
                <div>
                    <label class="block text-gray-700">Nama</label>
                    <input type="text" name="nama" value="<?= $data['nama'] ?>" required 
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                </div>
                <div>
                    <label class="block text-gray-700">fakultas</label>
                    <input type="text" name="fakultas" value="<?= $data['fakultas'] ?>" required 
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                </div>
                <div>
                    <label class="block text-gray-700">jurusan</label>
                    <input type="text" name="jurusan" value="<?= $data['jurusan'] ?>" required 
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                </div>
                <div>
                    <label class="block text-gray-700">kelas</label>
                    <input type="text" name="kelas" value="<?= $data['kelas'] ?>" required 
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                </div>
                <div>
                    <label class="block text-gray-700">telepon</label>
                    <input type="text" name="telepon" value="<?= $data['telepon'] ?>" required 
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                </div>
                
                <div class="flex gap-4">
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">
                        Update Data
                    </button>
                    <a href="read.php" class="bg-gray-500 text-white px-4 py-2 rounded-md hover:bg-gray-600">
                        Batal
                    </a>
                </div>
            </div>
        </form>
    </div>
</body>
</html>