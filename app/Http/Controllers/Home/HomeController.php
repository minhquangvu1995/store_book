<?php
/**
 * Created by PhpStorm.
 * User: Minh Vu
 * Date: 28/07/2018
 * Time: 10:39
 */

namespace App\Http\Controllers\Home;

use App\Models\Post;

class HomeController
{
    public function index()
    {
//        $admin = new \App\Models\User();
//        $admin->username = 'author';
//        $admin->password = bcrypt('123');
//        $admin->is_admin = '0';
//        $admin->save();

        $posts = Post::where('active', 1)->orderBy('id', 'DESC')->get();
        return view('home/home', ['posts' => $posts]);
    }
}