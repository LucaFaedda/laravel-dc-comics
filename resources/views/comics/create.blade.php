
@extends('layouts.app')
@section('content')
<div class="jumbo">
    
</div>
<div class="container-fluid bk-dark">

    <div class="container">
        <div class="row p-5">
            <div class="col-12">
                <form action="{{route('comics.store')}}" method="POST">
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
                                <label class="control-label mb-2 fw-bold text-light">Titolo</label>
                                <input type="text" name="title" class="form-control" placeholder="Inserisci il titolo">
                            </div>
                        </div>
                        <div class="col-8">
                            <label class="control-label mb-2 fw-bold text-light">Descrizione</label>
                            <textarea class="form-control" name="description" placeholder="Descrizione"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3">
                            <label class="control-label my-2 fw-bold text-light">Prezzo</label>
                            <input type="text" name="price" class="form-control" placeholder="Inserisci il Prezzo">
                        </div>
                        <div class="col-3">
                            <label class="control-label my-2 fw-bold text-light">Data di Uscita</label>
                            <input type="date" name="sale_date" class="form-control" placeholder="Inserisci la data di uscita">
                        </div>
                        <div class="col-3">
                            <label class="control-label my-2 fw-bold text-light">Serie</label>
                            <input type="text" name="series" class="form-control" placeholder="Inserisci la Serie">
                        </div>
                        <div class="col-3">
                            <label class="control-label my-2 fw-bold text-light">Tipo di Comics</label>
                            <select class="form-control" name="type">
                                <option value="disabled selected value">Seleziona un Tipo</option>
                                <option value="comic book">Comic Book</option>
                                <option value="graphic novel">Graphic Novel</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <label class="control-label my-2 fw-bold text-light">Link Immagine</label>
                            <input type="text" name="thumb" class="form-control" placeholder="Inserisci link Immagine">
                        </div>
                    </div>
                    <div class="row my-5">
                        <div class="col-3">
                            <button type="submit" class="form-control btn btn-primary">
                                Salva nuovo Fumetto
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

