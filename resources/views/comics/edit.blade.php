
@extends('layouts.app')
@section('content')
<div class="jumbo">
    
</div>
<div class="container-fluid bk-dark">

    <div class="container">
        <div class="row p-5">
            <div class="col-12">
                <form action="{{route('comics.update', $comic->id)}}" method="POST">
                    @method('PUT')
                    @csrf
                    @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error )
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <div class="row">
                        <div class="col-3">
                            <div class="form-group mb-4">
                                @error('title')
                                    <p class="text-danger fw-bold">{{$message}}</p>
                                @enderror
                                <label class="control-label mb-2 fw-bold text-light">Titolo</label>
                                <input type="text" name="title" class="form-control" placeholder="Inserisci il titolo" value="{{ old('title')  ?? $comic->title}}">
                            </div>
                        </div>
                        <div class="col-8">
                            @error('description')
                                <p class="text-danger fw-bold">{{$message}}</p> 
                            @enderror
                            <label class="control-label mb-2 fw-bold text-light">Descrizione</label>
                            <textarea class="form-control" name="description" placeholder="Descrizione">{{ old('description')  ?? $comic->description}}"</textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3">
                            @error('price')
                                <p class="text-danger fw-bold">{{$message}}</p>
                            @enderror
                            <label class="control-label my-2 fw-bold text-light">Prezzo</label>
                            <input type="text" name="price" class="form-control" placeholder="Inserisci il Prezzo" value="{{ old('price')  ?? $comic->price}}">
                        </div>
                        <div class="col-3">
                            @error('sale_date')
                                <p class="text-danger fw-bold">{{$message}}</p>
                            @enderror
                            <label class="control-label my-2 fw-bold text-light">Data di Uscita</label>
                            <input type="date" name="sale_date" class="form-control" placeholder="Inserisci la data di uscita" value="{{ old('sale_date')  ?? $comic->sale_date}}">
                        </div>
                        <div class="col-3">
                            @error('series')
                                <p class="text-danger fw-bold">{{$message}}</p>
                            @enderror
                            <label class="control-label my-2 fw-bold text-light">Serie</label>
                            <input type="text" name="series" class="form-control" placeholder="Inserisci la Serie" value="{{ old('series')  ?? $comic->series}}">
                        </div>
                        <div class="col-3">
                            @error('type')
                                <p class="text-danger fw-bold">{{$message}}</p>
                            @enderror
                            <label class="control-label my-2 fw-bold text-light">Tipo di Comics</label>
                            <select class="form-control" name="type" value="{{ old('type')  ?? $comic->type}}">
                                <option value="disabled selected value">Seleziona un Tipo</option>
                                <option value="comic book">Comic Book</option>
                                <option value="graphic novel">Graphic Novel</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            @error('thumb')
                                <p class="text-danger fw-bold">{{$message}}</p>
                            @enderror
                            <label class="control-label my-2 fw-bold text-light">Link Immagine</label>
                            <input type="text" name="thumb" class="form-control" placeholder="Inserisci link Immagine" value="{{ old('thumb')  ?? $comic->thumb}}">
                        </div>
                    </div>
                    <div class="row my-5">
                        <div class="col-3">
                            <button type="submit" class="form-control btn btn-primary">
                                Cambia fumetto
                            </button>
                        </div>
                    </div>
    
                </form>
            </div>
        </div>
    </div>
</div>

</div>
@endsection

