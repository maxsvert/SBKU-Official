<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stephenjude\FilamentBlog\Models\Post;
use GrahamCampbell\Markdown\Facades\Markdown;
use App\Models\Page;
class PageController extends Controller
{
   public function index(){
     $posts=Post::orderBy('id','desc')->get();
      return view('frontend.main',compact('posts'));
   }
   public function post(){
     $posts=Post::all();
      return view('frontend.page.post',compact('posts'));
   }
   public function postDetail($id)
   {
      $posts=Post::all();
      $post=Post::find($id);
      return view('frontend.page.postDetail',compact('post','posts'));
   }
   public function pageDetail($id)
   {
      $pages=Page::all();
      $page=Page::find($id);
      return view('frontend.page.pageDetail',compact('page','pages'));
   }
}
