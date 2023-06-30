<?php
namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class AdminPostController extends Controller{
    public function addView(){
        return view("admin.addpost");
    }

    public function addPost(Request $request){
        Post::validate($request);

        $newPost = new Post();
        $newPost->setTitle($request->input('title'));
        $newPost->setBody($request->input('body'));
        $newPost->save();

        return redirect()->route('admin.addpost');
    }
    
    public function show(){
        $viewData = [];
        $viewData['posts'] = Post::all();
        return view('admin.index')->with("viewData", $viewData);
    }

    public function deletePost($id){
        Post::destroy($id);
        return back();
    }
    public function editView($id){
        $viewData = [];
        $viewData['title'] = 'Edit Post';
        $viewData['post'] = Post::findOrFail($id);
        return view('admin.editpost')->with("viewData", $viewData);
    }
    public function editPost(Request $request, $id){
        Post::validate($request);

        $post = Post::findOrFail($id);
        $post->setTitle($request->input('title'));
        $post->setBody($request->input('body'));

        $post->save();

        return redirect()->route('admin.index');
    }
}