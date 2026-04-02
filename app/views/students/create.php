<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Siswa</title>
    <link rel="stylesheet" href="/css/output.css">
</head>
<body class="min-h-screen flex flex-col bg-gray-100">
    <header class="bg-blue-500 text-white">
        <div class="flex items-center justify-between container mx-auto p-4">
            <a href="/students" class="font-bold text-xl">Sistem Sekolah</a>
            <a href="/students/create" class="bg-white text-blue-500 px-4 py-2 rounded-lg">+ Tambah Siswa</a>
        </div>
    </header>

    <main class="container mx-auto grow space-y-2">
        <div class="mt-8">
            <div class="p-4 shadow rounded-lg bg-white">
                <h1 class="text-2xl font-bold">Tambah Siswa</h1>
                <p>Menambahkan siswa ke dalam sistem</p>
            </div>
        </div>
        <!-- Card Body Start -->
        <div class="bg-white shadow rounded-lg p-4">
            <form action="" class="grid grid-cols-2 gap-4">
                <div class="space-y-2">
                    <label class="block font-bold" for="name">Nama</label>
                    <input class="w-full px-4 py-2 border rounded-lg" type="text" id="name" placeholder="Masukkan Nama" name="name">
                </div>
                <div class="space-y-2">
                    <label class="block font-bold" for="nis">NIS</label>
                    <input class="w-full px-4 py-2 border rounded-lg" type="text" id="nis" placeholder="Masukkan NIS" name="nis">
                </div>
                <div class="space-y-2">
                    <label class="block font-bold" for="class">Kelas</label>
                    <input class="w-full px-4 py-2 border rounded-lg" type="text" id="class" placeholder="Masukkan Kelas" name="class">
                </div>
                <div class="space-y-2">
                    <label class="block font-bold" for="no">No Telepon</label>
                    <input class="w-full px-4 py-2 border rounded-lg" type="text" id="no" placeholder="Masukkan Nomor Telepon" name="no">
                </div>
            </form>
        </div>

        <!-- Card Body End -->
    </main>

    <footer class="bg-gray-800 text-white">
        <div class="text-center p-4">
            &copy <?=date('Y')?> Sistem Sekolah, SMK Kristen Immanuel
        </div>
    </footer>

</body>
</html>