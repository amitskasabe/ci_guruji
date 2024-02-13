<?php

// app/Models/UserModel.php

namespace App\Models;

use CodeIgniter\Model;

class HomeworkModel extends Model
{
    protected $table = 'homework'; // Set the table name
    protected $primaryKey = 'submission_id'; // Set the primary key field

    protected $allowedFields = ['id', 'assignment_id', 'submission_date', 'file_path', 'comments'];

    public function submitHomework($data)
    {
        $result = $this->insert($data);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function allStudentHomework()
    {
        return $this->findAll();
        // it will give us an array of all homework data 
    }

}