<?php

namespace App\Http\Controllers\Personal\Main;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\User;


class IndexController extends Controller
{
    public function __invoke()
    {
       // $data = [];
      // $data['likesCount'] = User::all()->count();
      // $data['commentCount'] = Post::all()->count();
        return view('personal.main.index');
    }
}
