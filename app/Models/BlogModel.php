<?php 

// app/Models/PostsModel.php
namespace App\Models;

use CodeIgniter\Model;

class BlogModel extends Model
{
    protected $table      = 'posts';
    protected $primaryKey = 'post_id';

    protected $allowedFields = ['title', 'content', 'author_id', 'category_id', 'publish_date'];

    protected $useTimestamps = true;
    protected $createdField  = 'publish_date';
    protected $updatedField  = 'updated_at';
}



?>