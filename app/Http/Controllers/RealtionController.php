<?php

namespace App\Http\Controllers;

use App\Models\Insurance;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class RealtionController extends Controller
{
    public function one_to_one()
    {
        // $user = User::find(1);

        // :: // class::method
        // => // key => value
        // -> // object->method // method chain
        // . // concatination

        // dd($user->insurance);


        // $in = Insurance::find(1);

        // dd($in->user);

        $users = User::with('insurance')->get();

        return view('relation.one_to_one', compact('users'));

    }

    public function one_to_many()
    {
        $post = Post::find(1);

        dd($post->comments);
    }

}
