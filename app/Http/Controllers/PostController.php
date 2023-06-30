<?php
namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller{
    public function index(){
        $viewData =[];
        $viewData['posts'] = Post::all();
        return view('welcome')->with("viewData", $viewData);
    }
}