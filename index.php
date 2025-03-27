<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Mahasiswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen p-8">
    <div class="max-w-2xl mx-auto bg-white rounded-lg shadow-md p-6">
        <h1 class="text-2xl font-bold mb-6 text-gray-800">Form Data Mahasiswa</h1>
        
        <?php if(isset($_SESSION['message'])): ?>
            <div class="mb-4 p-4 bg-green-100 text-green-700 rounded">
                <?= $_SESSION['message']; unset($_SESSION['message']); ?>
            </div>
        <?php endif; ?>

        <form action="create.php" method="POST">
            <div class="grid grid-cols-1 gap-6">
                <div>
                    <label class="block text-gray-700">NPM</label>
                    <input type="number" name="npm" required 
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                        maxlength="12">
                </div>

                <div>
                    <label class="block text-gray-700">Nama Lengkap</label>
                    <input type="text" name="nama" required 
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                </div>

                <div>
                    <label class="block text-gray-700">Fakultas</label>
                    <input type="text" name="fakultas" required 
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                </div>

                <div>
                    <label class="block text-gray-700">Jurusan</label>
                    <input type="text" name="jurusan" required 
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                </div>

                <div>
                    <label class="block text-gray-700">Kelas</label>
                    <input type="text" name="kelas" required 
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                </div>

                <div>
                    <label class="block text-gray-700">Telepon</label>
                    <input type="text" name="telepon" required 
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                </div>

                <div class="flex gap-4">
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">
                        Submit Data
                    </button>
                    <a href="read.php" class="bg-gray-500 text-white px-4 py-2 rounded-md hover:bg-gray-600">
                        View Data
                    </a>
                </div>
            </div>
        </form>
    </div>
</body>
</html>