<?php

// app/Models/Admin/AdminModel.php

namespace App\Models\Admin;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table = 'admin_users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['username', 'password', 'email', 'full_name', 'role_id', 'last_login'];

    protected $useTimestamps = false;
}

?>