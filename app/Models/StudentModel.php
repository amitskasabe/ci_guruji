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
}