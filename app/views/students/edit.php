<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Siswa</title>
    <link rel = "stylesheet" href="/css/output.css">
</head>
 
<body class="min-h-screen flex flex-col bg-gray-100">
    <header class="bg-gradient-to-r from-blue-600 to-blue-800 text-white shadow-lg">    
        <div class="flex justify-between items-center container mx-auto py-6 px-4">
            <a href="/students" class="font-bold text-2xl hover:text-blue-200 transition">Sistem Sekolah</a>
            <a href="/students/create" class="bg-white text-blue-600 px-6 py-2 rounded-lg font-semibold hover:bg-blue-50 transition shadow-md">+ Tambah Siswa</a>
        </div>
    </header>
 
    <main class="container mx-auto grow">
    <div class="mt-8 space-y-2">
        <div class="p-4 shadow rounded-lg bg-white">
            <h1 class="text-2xl font-bold">Edit Siswa</h1>
            <p>Melakukan perubahan pada data siswa yang terdaftar</p>
        </div>
 
    <div class="p-4 bg-white shadow rounded-lg">
       <form action="" class="grid grid-cols-2 gap-4">
        <div class="space-y-2">
            <label class="block font-bold" for="name">Nama</label>
            <input class="w-full px-4 py-2 border rounded-lg" type="text"  id="name" class="w-full border rounded-lg p-2">
        </div>
        <div class="space-y-2">
            <label class="block font-bold" for="class">Kelas</label>
            <input class="w-full px-4 py-2 border rounded-lg" type="text"  id="name" class="w-full border rounded-lg p-2">
        </div>
        <div class="space-y-2">
            <label class="block font-bold" for="NIS">NIS</label>
            <input class="w-full px-4 py-2 border rounded-lg" type="text"  id="name" class="w-full border rounded-lg p-2">
        </div>
        <div class="space-y-2">
            <label class="block font-bold" for="phone_number">Nomor Telepon</label>
            <input class="w-full px-4 py-2 border rounded-lg" type="text"  id="name" class="w-full border rounded-lg p-2">
        </div>
        <div class ="flex justify-end col-span-2 gap-4">
             <a href="/students" class="py-2 px-4 bg-gray-100 rounded-lg">Kembali</a>
        <button type="submit" class="px-4 py-2 bg-blue-500 rounded-lg text-white">Simpan</button>
        </div>
       </form>
    </div>
 
        </div>
    </main>
 
    <footer class="bg-gray-600 text-white">
        <div class="text-center p-4">
            &copy <?= date('Y')?> Sistem Sekolah - SMK Kristen Immanuel
        </div>
    </footer>
</body>