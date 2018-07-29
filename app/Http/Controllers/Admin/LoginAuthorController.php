<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginAuthorController extends Controller
{
    public function getLogin()
    {
        return view('admin/login_author');
    }

    public function setLogin(Request $request)
    {
        $data = [
            'username' => $request->username,
            'password' => $request->password,
            'is_admin' => '0'
        ];

        if (Auth::attempt($data)) {
            session($data);
            $posts = Post::orderBy('id', 'DESC')->get();
            return view('admin/manage_post', ['posts' => $posts, 'user' => Auth::user()]);
        } else {
            return view('admin/login_author');
        }
    }
}
