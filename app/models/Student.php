<?php
namespace App\models;
require_once '../app/core/Database.php';

use App\core\Database;

class Student extends Database 
{

    protected $table = 'students';

    //fungsi menampilkan daftar siswa
    public function getStudents()
    {
        $students = [];

        $query = "SELECT * FROM {$this->table}";
        $stmt =  $this->connection->prepare($query);
        $stmt -> execute();

        $result = $stmt->get_result();

        while($student = $result->fetch_assoc()) {
            $students[] = $student;
        }
        return $students;   
    }

    public function getStudent (int $id)
    {
        $query = "SELECT * FROM {$this->table} WHERE id = ?";
        $stmt = $this->connection->prepare($query);
        $stmt->bind_param('i', $id);
        $stmt->execute();

        $result = $stmt->get_result();
        
        $student = $result->fetch_assoc();

        return $student;

    }


}

?>