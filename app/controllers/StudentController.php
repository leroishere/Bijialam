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
            $id = intval($id);
            $studentModel = new Student();
            $student = $studentModel->getstudent($id);
            $this -> view('students.show', [
                'student' => $student 
            ]);
        }

        public function edit(string $id)
        {
            $this -> view('students.edit');
        }
        public function store()
        {
            $studentModel = new Student();
            $studentModel->insert($_POST);  
        }
    }

 
?>