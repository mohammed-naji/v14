<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index(Request $request)
    {

        // dd($request->search);
        // http://127.0.0.1:8000/posts?page=1
        // $offset = 0;

        // if(isset($page)) {
        //     $offset = $page * 20;
        // }

        // SELECT * FROM posts LIMIT 20 OFFSET $offset
        // $posts = Post::all(); // select * from posts
        // $posts = Post::paginate(20);
        // $posts = Post::simplePaginate(20);
        // $posts = Post::orderBy('id', 'desc')->paginate(20);
        // $posts = Post::orderByDesc('id')->paginate(20);

        if($request->has('search')) {
            $posts = Post::latest('id')
            ->where('title', 'like', '%' . $request->search . '%')
            ->paginate(20);
        }else {
            $posts = Post::latest('id')->paginate(20);
        }



        // dd($posts);
        return view('posts.index', compact('posts'));
    }

    public function show($id)
    {
        $post = Post::findOrFail($id); // select * from posts where id = 50

        // dd($post);

        // if(!$post) {
        //     return redirect('/');
        // }

        return view('posts.show', compact('post'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        // validate data
        $request->validate([
            'title' => 'required',
            'image' => 'required',
            'content' => 'required',
        ]);

        // upload files
        $imgname = rand().time().$request->file('image')->getClientOriginalName();
        $request->file('image')->move(public_path('uploads/posts'), $imgname);

        // save to database
        // 1. Query Builder
        // DB::table('posts')->insert([
        //     'title' => $request->title,
        //     'image' => $imgname,
        //     'content' => $request->content,
        // ]);

        // 2. Model Object
        // $post = new Post();
        // $post->title = $request->title;
        // $post->image = $imgname;
        // $post->content = $request->content;
        // $post->save();

        // 3. Eelqount Model
        Post::create([
            'title' => $request->title,
            'image' => $imgname,
            'content' => $request->content,
        ]);

        // redirect to new page
        return redirect()
        ->route('posts.index')
        ->with('msg', 'Post created successfully');
    }

    public function destroy($id)
    {
        Post::destroy($id);

        // DELETE FROM posts WHERE id = $id

        return redirect()
        ->route('posts.index')
        ->with('msg', 'Post Deleted successfully');
    }
}
