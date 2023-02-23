<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComicController as ComicController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     $prodotto = config('comics');
//     $listaFooter = config('footer'); 
//     $listaIcone = config('icons');
//     $listaSocial= config('social');
//     return view('home', compact('prodotto', 'listaFooter', 'listaIcone', 'listaSocial'));
// })->name('home');

// rotta per passare ComicController

Route::get('/', [ComicController::class, 'index']) -> name('home');

// sezione caracters

Route::get('caracters', function () {
    $listaFooter = config('footer'); 
    $listaIcone = config('icons');
    $listaSocial= config('social');
    return view('caracters', compact( 'listaFooter', 'listaIcone', 'listaSocial'));
})->name('caracters');

// sezione comics

Route::get('comics', function () {
    $listaFooter = config('footer'); 
    $listaIcone = config('icons');
    $listaSocial= config('social');
    return view('comics', compact( 'listaFooter', 'listaIcone', 'listaSocial'));
})->name('comics');

// sezione movies

Route::get('movies', function () {
    $listaFooter = config('footer'); 
    $listaIcone = config('icons');
    $listaSocial= config('social');
    return view('movies', compact( 'listaFooter', 'listaIcone', 'listaSocial'));
})->name('movies');

// sezione tv

Route::get('tv', function () {
    $listaFooter = config('footer'); 
    $listaIcone = config('icons');
    $listaSocial= config('social');
    return view('tv', compact( 'listaFooter', 'listaIcone', 'listaSocial'));
})->name('tv');

// sezione games

Route::get('games', function () {
     $listaFooter = config('footer'); 
    $listaIcone = config('icons');
    $listaSocial= config('social');
    return view('games', compact( 'listaFooter', 'listaIcone', 'listaSocial'));
})->name('games');

// sezione collectibles

Route::get('collectibles', function () {
     $listaFooter = config('footer'); 
    $listaIcone = config('icons');
    $listaSocial= config('social');
    return view('collectibles', compact( 'listaFooter', 'listaIcone', 'listaSocial'));
})->name('collectibles');

// sezione videos

Route::get('videos', function () {
     $listaFooter = config('footer'); 
    $listaIcone = config('icons');
    $listaSocial= config('social');
    return view('videos', compact( 'listaFooter', 'listaIcone', 'listaSocial'));
})->name('videos');

// sezione fans

Route::get('fans', function () {
     $listaFooter = config('footer'); 
    $listaIcone = config('icons');
    $listaSocial= config('social');
    return view('fans', compact( 'listaFooter', 'listaIcone', 'listaSocial'));
})->name('fans');

// sezione news

Route::get('news', function () {
     $listaFooter = config('footer'); 
    $listaIcone = config('icons');
    $listaSocial= config('social');
    return view('news', compact( 'listaFooter', 'listaIcone', 'listaSocial'));
})->name('news');

// sezione shop

Route::get('shop', function () {
    $listaFooter = config('footer'); 
    $listaIcone = config('icons');
    $listaSocial= config('social');
    return view('shop', compact( 'listaFooter', 'listaIcone', 'listaSocial'));
})->name('shop');

// sezione comics singolo

// Route::get('/comics_singolo/{series}', function ($series) {

//     $prodotto = config('comics');
//     $listaFooter = config('footer'); 
//     $listaIcone = config('icons');
//     $listaSocial= config('social');

//     $comics_singolo = '';
//     foreach($prodotto as $key => $fumetto){
//         if($key == $series){
//             $comics_singolo = $fumetto;
//         }
//     }
    
//     // in generale si utilizzano gli ID del prodotto salvato nel db. Per questo abbiamo dovuto usare la key. 
//     // la key è la posizione nell'array.
    
//    return view('comics_singolo', compact( 'comics_singolo','listaFooter', 'listaIcone', 'listaSocial'));
// });

Route::get('/comics_singolo/{id}', [ComicController::class, 'show']) -> name('comics-singolo');
