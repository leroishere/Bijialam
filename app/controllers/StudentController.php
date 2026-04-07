<?php
    namespace App\Controllers;
 
    class StudentController
    {
        public function index(): void
        {
            require_once __DIR__ . '/../views/students/index.php';
        }
        public function create(): void
        {
            require_once __DIR__ . '/../views/students/create.php';
        }

        public function show(string $id)
        {
            require_once __DIR__ . '/../views/students/show.php';
        }

        public function edit(string $id)
        {
            require_once __DIR__ . '/../views/students/edit.php';
        }
    }
 
?>