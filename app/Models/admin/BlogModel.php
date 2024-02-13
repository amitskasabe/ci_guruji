<?php

// app/Models/Admin/AdminModel.php

namespace App\Models\Admin;

use CodeIgniter\Model;

class BlogModel extends Model
{

    protected $table = 'posts';
    protected $primaryKey = "postId";
    protected $allowedFields = [
        'featured_image',
        'postId',
        'title',
        'content',
        'img',
        'published_date',
        'author_id',
        'category_id',
    ];


    public function showBlogs()
    {
        return $this->findAll();
    }

    public function addPost($data)
    {
        $data = $this->insert($data);
        if ($data) {
            return true;
        } else {
            return false;
        }
    }


}