<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index() {
        return view('panel.posts.index', ['posts'=>Post::all()]);
    }

    public function new() {
        return view('panel.posts.form');
    }

    public function add() {
        $data = $this->validate(request(), [
            'title'   => 'required|min:3|max:255',
            'slug'    => 'required|min:3|max:254',
            'content' => 'required',
            'category_id' => 'required',
            'user_id' => 'required',
            'type' => 'required',
//            'thumbnail' => 'required|max:20480'
        ], [
            'title.required' => 'وارد کردن عنوان الزامی است.',
            'title.min' => 'عنوان حداقل باید ۳ کاراکتر باشد.'
        ]);
        $post = Post::create($data);

        // store, storeAs, and:
       // $file_name = time() . '.' . request()->file('thumbnail')->extension();
        
        /* Ex: file_name-time() */

        $file_name =pathinfo(request()->file('thumbnail')->getClientOriginalName(), PATHINFO_FILENAME). '-' .time(). '.' . request()->file('thumbnail')->extension();


        request()->file('thumbnail')->move(public_path('uploads/thumbnails'), $file_name);

        $post->thumbnail = $file_name;
        $post->save();

        return redirect()->back()->with(['success'=>true]);
    }

    public function edit($id) {
        $post = Post::find($id);
        return view('panel.posts.form')->with(['post'=>$post]);
    }

    public function update($id) {
        $data = $this->validate(request(), [
            'title'   => 'required|min:5|max:255',
            'slug'    => 'required|min:3|max:254',
            'content' => 'required',
            'thumbnail'   => 'required'
        ]);
        $post = Post::find($id);
        $post->update($data);
        return redirect()->route('panel.posts')->with(['success'=>true]);
    }

    public function delete($id) {
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect()->route('panel.posts')->with(['success'=>true]);
    }
}
