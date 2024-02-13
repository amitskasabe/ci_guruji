<?php

// app/Models/UserModel.php

namespace App\Models;

use CodeIgniter\Model;

class StudentModel extends Model
{
    protected $table = 'students';
    protected $primaryKey = 'id';

    protected $allowedFields = ['firstname', 'lastname', 'username', 'email', 'password', 'phone', 'city'];

    protected $useTimestamps = true;  // Corrected property name
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';

    public function getAllStudents($email)
    {
        $data = $this->where('email', $email)->findAll();
        return $data;
    }

    public function getAllCourses($studentEmail)
    {
        $db = \Config\Database::connect();

        $query = $db->query("
        SELECT students.id, course.course_id, course.title AS course_title
        FROM students
        LEFT JOIN course ON FIND_IN_SET(course.course_id, students.courses) > 0
        WHERE students.email = ?
    ", [$studentEmail]);

        return $query->getRow();
    }



}