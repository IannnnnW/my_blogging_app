<?php 
namespace App\Models;

use Illuminate\Database\Eloquent\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;


class Post extends Model{
    public static function validate(Request $request){
        $request->validate([
            'title'=>'required|max:255',
            'body'=>'required'
        ]);
    }
    public function getId(){
        return $this->attributes['id'];
    }
    public function getTitle(){
        return $this->attributes['title'];
    }
    public function setTitle($title){
        $this->attributes['title'] = $title;
    }
    public function getBody(){
        return $this->attributes['body'];
    }
    public function setBody($body){
        $this->attributes['body'] = $body;
    }
}