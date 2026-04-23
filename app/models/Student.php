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

    public function insert(array $data)
    {
        $name = htmlspecialchars($data['name']);
        $nis = htmlspecialchars($data['NIS']);
        $class = htmlspecialchars($data['class']);
        $PhoneNumber = htmlspecialchars($data['Phone_Number']);

        $query = "INSERT INTO {$this->table} (name, NIS, class, Phone_Number) VALUES (?, ?, ?, ?)"; 

        $stmt = $this->connection->prepare($query);
        $stmt->bind_param('ssss', $name, $nis, $class, $PhoneNumber);
        $stmt->execute();

        if($stmt->affected_rows > 0){
            header('Location: /students');
            exit; 
        }else {
            echo 'Error to store Student';
        }
    }

 public function update(array $data, int $id)
    {
        $name = htmlspecialchars($data['name']);
        $nis = htmlspecialchars($data['NIS']);
        $class = htmlspecialchars($data['class']);
        $PhoneNumber = htmlspecialchars($data['Phone_Number']);

        $query = "UPDATE {$this->table} SET name = ?, NIS = ?, class = ?, Phone_Number = ? WHERE id = ?"; 

        $stmt = $this->connection->prepare($query);
        $stmt->bind_param('ssssi', $name, $nis, $class, $PhoneNumber, $id);
        $stmt->execute();

        if($stmt->affected_rows > 0){
            header('Location: /students');
            exit; 
        }else {
            echo 'Error to update Student';
        }
    }

    public function delete (int $id)
    {
        $query = "DELETE FROM {$this->table} WHERE id = ?"; 

        $stmt = $this->connection->prepare($query);
        $stmt->bind_param('i', $id);
        $stmt->execute();
        if($stmt->affected_rows > 0){
            header('Location: /students');
            exit; 
        }else {
            echo 'Error to delete Student';
        }
    }
}

?>