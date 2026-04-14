<?php 
    namespace App\Controllers;
    require_once '../app/core/controller.php';
    require_once '../app/Models/Student.php';

    use app\core\controller; 
    use app\Models\Student;

    class StudentController extends Controller
    {
        public function index(): void
        {
            $studentModel = new Student();
            $students = $studentModel->getStudents();

            $this -> view('students.index', [
                'students' => $students 
            ]); 
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