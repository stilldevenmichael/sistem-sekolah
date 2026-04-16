        <div class="mt-8 space-y-2">
            <div class="p-4 shadow rounded-lg bg-white">
                <h1 class="text-2xl font-bold">Detail Siswa</h1>
                <p>Menampilkan detail informasi siswa</p>
            </div>
        </div>

        <div class="bg-white shadow rounded-lg p-4">
            <div class="grid grid-cols-2 gap-4">
                <div class="space-y-2">
                    <label class="block font-bold" for="name">Nama</label>
                    <input value="<?= $student['name']?>" class="w-full px-4 py-2 border rounded-lg" type="text" id="name" placeholder="Masukkan Nama" name="name" readonly>
                </div>
                <div class="space-y-2">
                    <label class="block font-bold" for="nis">NIS</label>
                    <input value="<?= $student['nis'] ?>" class="w-full px-4 py-2 border rounded-lg" type="text" id="nis" placeholder="Masukkan NIS" name="nis" readonly>
                </div>
                <div class="space-y-2">
                    <label class="block font-bold" for="class">Kelas</label>
                    <input value="<?= $student['class'] ?>" class="w-full px-4 py-2 border rounded-lg" type="text" id="class" placeholder="Masukkan Kelas" name="class" readonly>
                </div>
                <div class="space-y-2">
                    <label class="block font-bold" for="no">No Telepon</label>
                    <input value="<?= $student['phone_number'] ?>" class="w-full px-4 py-2 border rounded-lg" type="text" id="no" placeholder="Masukkan Nomor Telepon" name="no" readonly>
                </div>
                <div class="flex justify-end col-span-2 gap-4">
                    <a href="/students" class="py-2 px-4 bg-gray-100 rounded-lg">Kembali</a>
                </div>
            </div>
        </div>