


    @extends('layouts.app')
    @section('content')
    <div class="jumbo">
        
    </div>
    <div class="container-fluid bk-dark">
        <div class='container'>
            <div class='row'>
                <div class='col-12 py-5'>
                    <div class="row">
                            @foreach ($prodotto as  $fumetto)
            
                                <div class="card-personalizzata">
                                    <a href="/comics_singolo/{id}', ['id' => $fumetto['id']])">
                                        <div class="image-container">
                                            <img src="{{$fumetto['thumb']}}">
                                        </div>
                                        <h6 class="text-light">{{ $fumetto['series'] }}</h6>

                                    </a>
                                </div>
                            @endforeach
                    </div>
                       
                </div>
                <div class="col-12 d-flex justify-content-center mb-5 ">
                    <button class="text-light tw-bold btn-personalizzato ">LOAD MORE</button>
                </div>
            </div>
        </div>

    </div>
    @endsection

