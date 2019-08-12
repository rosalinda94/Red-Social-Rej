<?php
 
namespace App\Http\Controllers;
 
use App\Comment;
use App\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests\CommentRequest;
 
class CommentsController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
 

    public function create(Request  $data)
    {
       $comment = Comment::create([
        'body' => $data['body'],
        'post_id' =>  $data['postid'],
        'user_id' => Auth::id(),
      ]);
        return redirect('/index');

    }
}