<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use App\group;
use App\like;
use App\comment;
use App\Additional;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{

    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts= Post::latest()->paginate(10);
        $users= User::all();
        $additionals= Additional::all();
        $groups= Group::all();
        $comments= comment::all();
        $likes= like::all();


        return view('home.index', compact('posts', 'users','groups','comments','additionals','likes'));

    }

    public function filter(Request $data)
    {
        $posts= Post::where('group_id', '=', $data['id'])->latest()->paginate(10);
        $users= User::all();
        $groups= Group::all();
        $comments= comment::all();

      return view('home.index', compact('posts', 'users','groups','comments'));
    }


    public function notificacion(Request $data)
    {
        $posts= Post::where('id', '=', $data['id'])->latest()->paginate(10);
        $users= User::all();
        $additionals= Additional::all();
        $groups= Group::all();
        $comments= comment::all();


      return view('home.labels', compact('posts', 'users','groups','comments','additionals'));
    }

    public function etiqueta(Request $data)
    {
        $posts= Post::where('etiqueta_id', '=',Auth::id())->latest()->paginate(10);
        $users= User::all();
        $additionals= Additional::all();
        $groups= Group::all();
        $comments= comment::all();


      return view('home.labels', compact('posts', 'users','groups','comments','additionals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected function validator(array $data)
    {
         return Validator::make($data, [
             'body' => ['required', 'string', 'max:255'],
             'image' => ['required', 'string'],

         ]);
    }

    public function create(Request $data)
    {
        if (is_null($data['avatar'])){
            $post = Post::create([
            'body' => $data['body'],
            'group_id' => $data['actividad'],
            'etiqueta_id' => $data['etiqueta'],
            'user_id' => Auth::id(),
            ]);
           
        }else{
             $ruta= request()->file('avatar')->store('public');
            $nombreArchivo= basename($ruta);

            $post = Post::create([
            'body' => $data['body'],
            'image' => $nombreArchivo,
            'group_id' => $data['actividad'],
            'etiqueta_id' => $data['etiqueta'],
            'user_id' => Auth::id(),
            ]);
        }
            

       
        return redirect('/index');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {

        Post::create([
            'body'=> $data['body'],
            'image' => $data['image'],
            'group_id' => $data['actividad'],
            'etiqueta_id' => $data['etiqueta'],
            'user_id' => Auth::id(),
        ]);
        return redirect()->route('post.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $posts= Post::latest()->paginate(10);
        $users= User::all();
        $groups= Group::all();
        $comments= comment::all();        
        $additionals= Additional::all();
        $likes= like::all();
        return view('home.profile', compact('posts', 'users','groups','comments','additionals','likes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function destroy($id) {
      
      $result = Post::find($id);
      $Comment = Comment::where('post_id', '=',$id);
      $Comment->delete();
      $result->delete();

      return redirect('/index');
    }

}
