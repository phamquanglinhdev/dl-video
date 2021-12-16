<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function show($id)
    {
        $video = \App\Models\Video::find($id);
        if ($video->authenticate()==true) {
            return view('client.video', ["video" => $video]);
        }else{
            if(!backpack_auth()->check()){
                return view("backpack.auth.login");
            }else{
                return view("errors.404");
            }
        }
    }
}
