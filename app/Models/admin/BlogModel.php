<?php

// app/Models/Admin/AdminModel.php

namespace App\Models\Admin;

use CodeIgniter\Model;

class BlogModel extends Model
{

    protected $table = 'posts';
    protected $primaryKey = "postId";
    protected $allowedFields = [
        'postId',
        'title',
        'content',
        'published_date',
        'author_id',
        'category_id',
    ];


    public function showBlogs()
    {
        return $this->findAll();
    }


}