


    @extends('layouts.app')
    @section('content')
    <div class="jumbo">
        
    </div>
    <div class="container-fluid bk-dark">
        <div class='container'>
            <div class='row'>
                <div class='col-12 py-5'>
                    <div class="row">
                            @foreach ($comics as  $fumetto)
                                <div class="card-personalizzata ">
                                    <div class="image-container">
                                        <img src="{{$fumetto['thumb']}}">
                                    </div>
                                        <h6 class="text-light">{{ $fumetto['series'] }}</h6>
                                    <div class="mt-3 d-flex ">
                                        <a class=" btn-link " href="{{route('comics.show', $fumetto['id'])}}"><i class="fa-solid fa-magnifying-glass text-success"></i></a>
                                        <a class="mx-2 btn-link " href="{{route('comics.edit', $fumetto['id'])}}"><i class="fa-solid fa-pencil text-warning"></i></a>
                                        <form action="{{route('comics.destroy', $fumetto['id'])}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                        <button class=" btn-link "><i class="fa-solid fa-trash-can text-danger"></i></button>
                                        </form>
                                    </div>
                                </div>
                            @endforeach
                    </div>
                       
                </div>
                <div class="row d-flex justify-content-center mb-5 ">
                    <div class="col-5">
                        <button class="text-light tw-bold btn-personalizzato " >LOAD MORE</button>
                    </div>
                    <div class="col-5">
                        <a class="text-light btn-personalizzato"  href="{{route('comics.create')}}">CREA NUOVO FUMETTO</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    @endsection

