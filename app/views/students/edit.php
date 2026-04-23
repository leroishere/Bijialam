<div class="mt-8 space-y-2">
        <div class="p-4 shadow rounded-lg bg-white">
            <h1 class="text-2xl font-bold">Edit Siswa</h1>
            <p>Melakukan perubahan pada data siswa yang terdaftar</p>
        </div>
 
    <div class="p-4 bg-white shadow rounded-lg">
       <form action="/student/<?= $student['id'] ?>" method="POST" class="grid grid-cols-2 gap-4">
        <input type="hidden" name="_method" value="PUT">
        <div class="space-y-2">
            <label class="block font-bold" for="name">Nama</label>
            <input value="<?= $student['name'] ?>" class="w-full px-4 py-2 border rounded-lg" type="text"  id="name" class="w-full border rounded-lg p-2">
        </div>
        <div class="space-y-2">
            <label class="block font-bold" for="class">Kelas</label>
            <input value="<?= $student['class'] ?>" class="w-full px-4 py-2 border rounded-lg" type="text"  id="class" class="w-full border rounded-lg p-2">
        </div>
        <div class="space-y-2">
            <label class="block font-bold" for="NIS">NIS</label>
            <input value="<?= $student['NIS'] ?>" class="w-full px-4 py-2 border rounded-lg" type="text"  id="NIS" class="w-full border rounded-lg p-2">
        </div>
        <div class="space-y-2">
            <label class="block font-bold" for="phone_number">Nomor Telepon</label>
            <input value="<?= $student['Phone_Number'] ?>" class="w-full px-4 py-2 border rounded-lg" type="text"  id="phone_number" class="w-full border rounded-lg p-2">
        </div>
        <div class ="flex justify-end col-span-2 gap-4">
             <a href="/students" class="py-2 px-4 bg-gray-100 rounded-lg">Kembali</a>
        <button type="submit" class="px-4 py-2 bg-blue-500 rounded-lg text-white">Simpan</button>
        </div>
       </form>
    </div>
 
        </div>
   