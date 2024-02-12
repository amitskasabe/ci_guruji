<?php

namespace App\Controllers;

use App\Models\BlogModel;

class BlogController extends BaseController
{
    public function blog()
    {
        $post = new BlogModel();
        $data = $post->findAll();
        return view('pages/blogs', $data);
    }
    public function showBlogs()
    {
        
        $page = ['page' => "blogs"];
        echo view('components/header', $page);
        $post = new BlogModel();
        $users = $post->findAll();
        $data = [
            'data' => $users,
            'count' => 0
        ];
        echo view('pages/blogs', $data);
    }

}

?>
<script>
    let button = document.getElemenetById("#button");
    
    let button = $("#button");
</script>