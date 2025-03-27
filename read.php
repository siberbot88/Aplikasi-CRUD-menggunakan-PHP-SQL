<?php
include 'koneksi.php';
$result = $conn->query("SELECT * FROM data_mahasiswa");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen p-8">
    <div class="max-w-6xl mx-auto">
        <h1 class="text-2xl font-bold mb-6">Data Mahasiswa</h1>
        
        <table class="min-w-full bg-white rounded-lg shadow-md">
            <thead>
                <tr class="bg-gray-200">
                    <th class="py-2 px-4">NPM</th>
                    <th class="py-2 px-4">Nama</th>
                    <th class="py-2 px-4">Fakultas</th>
                    <th class="py-2 px-4">Jurusan</th>
                    <th class="py-2 px-4">Kelas</th>
                    <th class="py-2 px-4">Telepon</th>
                    <th class="py-2 px-4">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = $result->fetch_assoc()): ?>
                <tr class="border-t">
                    <td class="py-2 px-4 text-center"><?= $row['npm'] ?></td>
                    <td class="py-2 px-4"><?= $row['nama'] ?></td>
                    <td class="py-2 px-4"><?= $row['fakultas'] ?></td>
                    <td class="py-2 px-4"><?= $row['jurusan'] ?></td>
                    <td class="py-2 px-4"><?= $row['kelas'] ?></td>
                    <td class="py-2 px-4"><?= $row['telepon'] ?></td>
                    <td class="py-2 px-4 flex gap-2">
                        <a href="update.php?npm=<?= $row['npm'] ?>" class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600">Edit</a>
                        <a href="delete.php?npm=<?= $row['npm'] ?>" class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600" onclick="return confirm('Yakin hapus data?')">Hapus</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
        
        <a href="index.php" class="mt-4 inline-block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
            Kembali ke Form
        </a>
    </div>
</body>
</html>