<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comics;

class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listaFooter = config('footer'); 
        $listaIcone = config('icons');
        $listaSocial= config('social');
        $comics = Comics::all();
        
        return view('comics.index', compact('comics','listaFooter', 'listaIcone', 'listaSocial'));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $listaFooter = config('footer'); 
        $listaIcone = config('icons');
        $listaSocial= config('social');
        return view('comics.create', compact('listaFooter', 'listaIcone', 'listaSocial'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:50',
            'description' => 'required',
            'thumb' => 'required',
            'price' => 'required',
            'series' => 'required|max:50',
            'sale_date' => 'required',
            'type' => 'required|max:50'

        ]);

        $form_data = $request->all();

        $newComic = new Comics();
        $newComic->fill($form_data);
        $newComic->save();

        return redirect()->route('comics.show' , $newComic['id']);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $listaFooter = config('footer'); 
        $listaIcone = config('icons');
        $listaSocial= config('social');
        $comic = Comics::findOrFail($id);

        
        // if($comics){
        //     $data = [
        //         'comics' => $comics
        //     ];
        // }
        
        return view('comics.show' , compact('comic', 'listaFooter', 'listaIcone', 'listaSocial'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        // uguale allo show, cambia solo la rotta in return
        $listaFooter = config('footer'); 
        $listaIcone = config('icons');
        $listaSocial= config('social');
        $comic = Comics::findOrFail($id);

        return view('comics.edit' , compact('comic', 'listaFooter', 'listaIcone', 'listaSocial'));
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
        $comic = Comics::findOrFail($id);
        $request->validate([
            'title' => 'required|max:50',
            'description' => 'required',
            'thumb' => 'required',
            'price' => 'required',
            'series' => 'required|max:50',
            'sale_date' => 'required',
            'type' => 'required|max:50'
        ]);
        $form_data = $request->all();
        
        $comic->update($form_data); // prendi il comic e mi fai l'update 

        return redirect()->route('comics.show' , [ 'comic' => $comic -> id]);




    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comic = Comics::findOrFail($id);
        $comic->delete();
        
        return redirect()->route('comics.index');
    }
}
