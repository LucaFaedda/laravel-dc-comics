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
        $form_data = $request->all();

        $newComics = new Comics();
        $newComics->title = $form_data['title'];
        $newComics->description = $form_data['description'];
        $newComics->thumb = $form_data['thumb'];
        $newComics->price = $form_data['price'];
        $newComics->series = $form_data['series'];
        $newComics->sale_date = $form_data['sale_date'];
        $newComics->type = $form_data['type'];
        $newComics->save();

        return redirect()->route('comics.show' , $newComics['id']);

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
        
        return view('comics.show', compact('comic', 'listaFooter', 'listaIcone', 'listaSocial'));
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
    public function destroy($id)
    {
        //
    }
}
