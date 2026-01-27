<?php
namespace App\Controllers;

class StudentController
{
    public function index()
    {
        echo "<h1>Students Page</h1>";
        echo "<p>Show students list</p>";
    }

    public function create()
    {
        echo "<h1>Tambah Siswa</h1>";
        echo "<p>Menambahkan siswa baru</p>";
    }
}
?>