<?php

namespace App\Controllers;

use App\Models\Admin\BlogModel;
use App\Models\Admin\CategoryModel;

// use App\Models\BlogModel;

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
        echo view('components/footer');
    }
    public function writeBlog()
    {
        $cat = new CategoryModel();
        $categories = $cat->selectCats();
        echo view('admin/static/write-blogs', ['categories' => $categories]);

    }

    public function addBlog()
    {

        $posts = new BlogModel();
        $title = $this->request->getPost('title');
        $featuredImage = $this->request->getFile('featuredImage');
        $content = $this->request->getPost('content');
        $publishedDate = date('Y-m-d H:i:s');
        $authorId = 1;
        $categoryId = $this->request->getPost('cat');

        $targetDirectory = './public/assets/images/blog-featured-images/';
        if ($featuredImage->isValid()) {
          
            $newName = $featuredImage->getRandomName();
            echo $newName;
            $featuredImage->move($targetDirectory, $newName);

            if ($featuredImage->hasMoved()) {
                // Successful move
                echo "Image moved successfully.";
            }
        }

        $postData = [
            'featured_image' => $newName,
            'title' => $title,
            'content' => $content,
            'img' => $newName,
            'publish_date' => $publishedDate,
            'author_id' => $authorId,
            'category_id' => $categoryId
        ];
        $insertData = $posts->addPost($postData);

        if ($insertData) {
            echo "Blog added successfully.";
        } else {
            echo "Failed to add the blog.";
        }
        

        if ($insertData) {
            $session = session();
            $session->setFlashdata('message', 'Blog Added');
            return redirect()->to('admin/write-blog');

        } else {
            $session = session();
            $session->setFlashdata('message', 'Failed to add Blog , Please contact admin ');
            return redirect()->to('admin/write-blog');

        }
        // $categories->insert($cat);
    }





}

?>
<script>
    let button = document.getElemenetById("#button");
    
    let button = $("#button");
</script>