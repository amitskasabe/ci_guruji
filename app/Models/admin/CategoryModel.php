<?php

// app/Models/Admin/AdminModel.php

namespace App\Models\Admin;

use CodeIgniter\Model;

class CategoryModel extends Model
{
    protected $table = 'categories';
    protected $primaryKey = 'category_id';
    protected $allowedFields = [
        'category_id',
        'category_name',  
    ];

    public function selectCats()
    {
        return $this->findAll();
    }
}