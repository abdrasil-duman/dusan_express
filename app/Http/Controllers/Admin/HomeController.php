<?php

namespace App\Http\Controllers\Admin;

use App\Entity\Blog\Post\Post;
use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\Posts;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $products_count=Product::all()->count();
        $posts_count=Posts::all()->count();
        $users_count=User::all()->count();
        $categories_count=Categories::all()->count();
        return view('admin_panel.index',[
            'posts_count'=>$posts_count,
            'users_count'=>$users_count,
            'categories_count'=>$categories_count,
            'products_count'=>$products_count
        ]);
    }
}
