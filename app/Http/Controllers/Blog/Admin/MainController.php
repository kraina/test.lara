<?php

namespace App\Http\Controllers\Blog\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use MetaTag;

class MainController extends Controller
{
    public function index()
    {
        MetaTag::setTags(['title' =>'Админ панель']);
        return view('blog.admin.main.index');
    }
}
