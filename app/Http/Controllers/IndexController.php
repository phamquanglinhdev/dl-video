<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use App\Models\Video;
use Illuminate\Http\Request;

class IndexController extends Controller
{
//    public function __construct(){
//        $this->middleware("auth");
//    }

    public function index($id = -1)
    {
        if (backpack_auth()->check()) {
            $categories = User::find(backpack_user()->id)->Categories()->get();
            if ($categories->count() != 0) {
                if ($id == -1) {
                    $id = User::find(backpack_user()->id)->Categories()->first()->id;
                }
                $videos = Category::find($id)->Videos()->get();
            } else {
                //$videos = Video::where("name", "like", "[%")->get();
                return view("client.index");
            }
        } else {
            $videos = Video::where("name", "like", "[%")->get();
            return view("client.index", ["videos" => $videos]);
        }

        return view("client.index", ["categories" => $categories, "current" => $id, "videos" => $videos]);
    }
}
