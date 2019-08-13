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
        'post_id' =>  $data['postId'],
        'user_id' => Auth::user()->id,
      ]);
        return back();

    }

    public function destroy($id) 
    {
      $result = Comment::find($id);
      $result->delete();

      return back();
    }
}