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
    }
 
 
 
?>