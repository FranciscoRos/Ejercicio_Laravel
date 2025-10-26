<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class PostsController extends Controller{
  public function posts(){
    return view('posts');
  }

 public function postsId($id){
  return view('posts',['id'=>$id]);
  //return "llegó el argumento $id";
 }

 public function __invoke(){
  return "LLegaste a posts mediante el invoke";
 }
}

?>
