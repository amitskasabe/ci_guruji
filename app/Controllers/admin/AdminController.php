<?php

namespace App\Controllers\Admin;

use App\Models\admin\AdminModel;
use App\Models\Admin\BlogModel;
use App\Models\Admin\CategoryModel;
use CodeIgniter\Controller;

class AdminController extends Controller
{

    public function dashboard()
    {
        $isLoggedIn = false;
        helper('url');
        $autoload['libraries'] = ['session'];
        $session = session();
        $userDetail = $session->get('userDetails');
        // $username = "amit";
        // $fname = $userDetail['first_name'];
        // $lname = $userDetail['last_name'];
        $username = "amit";
        if ($username) {
            $isLoggedIn = true;
        }

        return view("admin/static/index", ['firstname' => $username]);
    }
    public function loginpage()
    {
        return view("admin/static/pages-sign-in");
    }
    public function login()
    {
        $username = $this->request->getPost("email");
        $password = $this->request->getPost("password");

        $adminModel = new AdminModel();
        $user = $adminModel->where('username', $username)->first();

        if ($user) {
            // Compare plain text password
            if ($password === $user['password']) {
                $session = session();
                $userDetails = [
                    'username' => $username,
                    'first_name' => "amit",
                    'last_name' => "kasabe",
                ];
                $session->set('userDetails', $userDetails);
                return redirect()->to('/admin/dashboard');
            } else {
                // Incorrect password
                echo "Incorrect password!";
            }
        } else {
            // User does not exist
            echo "User not found!";
        }
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
        $content = $this->request->getPost('content');
        $publishedDate = date('Y-m-d H:i:s');
        $authorId = 1;
        $categoryId = $this->request->getPost('cat');
        $postData = [
            'title' => $title,
            'content' => $content,
            'publish_date' => $publishedDate,
            'author_id' => $authorId,
            'category_id' => $categoryId
        ];
        $insertData = $posts->insert($postData);
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