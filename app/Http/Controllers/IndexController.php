<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __construct(){
        $this->middleware("auth");
    }

    public function index($id=-1){
        $categories = User::find(backpack_user()->id)->Categories()->get();
        if($id==-1){
            $id = User::find(backpack_user()->id)->Categories()->first()->id;
        }
        $videos= Category::find($id)->Videos()->get();

        return view("client.index",["categories"=>$categories,"current"=>$id,"videos"=>$videos]);
    }
}
