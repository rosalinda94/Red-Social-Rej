<?php

namespace App\Http\Controllers;

use App\Additional;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class AdditionalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $additionals= Additional::all();
         return view('home.index', compact('additionals'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create(Request $data)
    {
       Additional::create([
        'status' => $data['status'],
        'city' => $data['city'],
        'mobileNumber' => $data['mobileNumber'],
        'date' => $data['date'],
        'user_id' => Auth::id(),
      ]);

        return redirect('/profile');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function update(Request $data)
    {   
        // aca estoy guardando la imagen
        $ruta= request()->file('portada')->store('public');
        $nombreArchivo= basename($ruta);

         $post = Additional::create([
               'image' => $nombreArchivo,
               'user_id' => Auth::id(),
            ]);


        // auth()->user()->additional()->updateOrCreate([
        //     'image' => $post
        // ]);

            /*


        //aca busco si existe la imagen
        $id= auth()->user()->additional()->where('user_id', $id);

        //aca consulto si el id tiene algo hago un update en la base
        if($id!=''){


        
        }
        //aca hago que si el id no existe lo creo
        else{
            Additional::create([
               'image' => $nombreArchivo,
               'user_id' => Auth::id(),
            ]);
            
        }*/
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
