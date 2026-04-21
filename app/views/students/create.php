 <div class="mt-8 space-y-2">
        <!-- Card Header Start-->
        <div class="p-4 shadow rounded-lg bg-white">
            <h1 class="text-2xl font-bold">Tambah Siswa</h1>
            <p>Menambahkan siswa ke dalam sistem</p>
        </div>
        <!-- Card Header End-->
 
        <!-- Card Body Start-->
    <div class="bg-white shadow rounded-lg p-4">
        <form action="/students" method = "POST" class ="grid grid-cols-2 gap-4">
            <div class ="space-y-2">
                <label class ="block font-bold" for="name">Nama</label>
                <input class="w-full px-4 py-2 border rounded-lg" type ="text" id="name" placeholder="Masukkan Nama" name="name">
            </div>
   
            <div class ="space-y-2">
                <label class ="block font-bold" for="nis">NIS</label>
                <input class="w-full px-4 py-2 border rounded-lg" type ="text" id="nis" placeholder="NIS" name="nis">
            </div>
 
            <div class ="space-y-2">
                <label class ="block font-bold" for="class">Kelas</label>
                <input class="w-full px-4 py-2 border rounded-lg" type ="text" id="class" placeholder="Masukkan Kelas" name="class">
            </div>
 
            <div class ="space-y-2">
                <label class ="block font-bold" for="phone_number">Nomor Telepon</label>
                <input class="w-full px-4 py-2 border rounded-lg" type ="text" id="phone_number" placeholder="Masukkan Nomor Telepon" name="phone_number">
            </div>
            <div class="flex justify-end col-span-2 gap-4">
                <a href="/students" class="py-2 px-4 bg-gray-200 rounded-lg">Kembali</a>
                <button type="submit" class="py-2 px-4 bg-blue-500 rounded-lg text-white">Simpan</button>
            </div>
        </form>
    </div>
        <!-- Card Body End-->