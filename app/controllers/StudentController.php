<?php 
    namespace App\Controllers;
    require_once '../app/core/controller.php';
    use app\core\controller; 
    class StudentController extends Controller
    {
        public function index(): void
        {
            $this -> view('students.index');
        }
        public function create(): void
        {
            $this -> view('students.create');
        }

        public function show(string $id)
        {
            $this -> view('students.show');
        }

        public function edit(string $id)
        {
            $this -> view('students.edit');
        }
    }
 
?>