<?php

// app/Models/UserModel.php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['firstname', 'lastname', 'password'];

    protected $useTimestamps = true;  // Corrected property name
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
}


?>