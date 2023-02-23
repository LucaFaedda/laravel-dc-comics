@extends('layouts.app')
    @section('content')
    <div class="jumbo">
    
    </div>
    <div class="container-fluid h-100px">

    </div>
    <div class="container mb-5">
        <div class="row ">
            <div class="col-8 d-flex flex-column justify-content-between ">
                <h1 class="light-blu ">{{ $singolo['title'] }}</h1>
                <div class="row d-flex bg-green  border-bottom border-1 border-dark align-items-center py-2">
                    <div class="col-9 d-flex justify-content-between align-items-center  mt-2">
                        <div class="d-flex">
                            <span class=" light-green">U.S. Price:</span><p class="m-0 text-light"> {{$singolo['price']}}</p>
                        </div>
                    <p class="m-0 light-green">AVAIABLE</p>
                    </div>
                    <div class="col-2 d-flex flex-row-reverse align-items-center   ms-2">
                        <select class="select-personalizzata">
                            <option value="select">Check Availability</option>
                        </select>

                    </div>
                </div>
                <p class="my-2">
                    {{$singolo['description']}}
                </p>            
            </div>
            <div class="col-4">
                <h6>ADVERTISEMENT</h6>
                <img src="{{ Vite::asset('resources/img/adv.jpg') }}" alt="adv">
            </div>
        </div>
    </div>
    <div class="container-fluid bk-gray2 mt-5">
        <div class="container pt-4">
            <div class="row d-flex justify-content-between" >
                <div class="col-5">
                    <h3 class="light-blu mb-3 ">Talent</h3>
                    <div class="row d-flex justify-content-between border-top border-bottom border-1 ">
                        <div class="col-3 pt-2">
                            <p class="light-blu fw-bold">Art By:</p>
                        </div>
                        <div class="col-7 pt-2">
                           <p class="light-blu-2 ">{{ $singolo['artists']}}</p>                           
                        </div>
                    </div>
                    <div class="row d-flex justify-content-between  border-bottom border-1 ">
                        <div class="col-3 pt-2">
                            <p class="light-blu fw-bold">Written By:</p>
                        </div>
                        <div class="col-7 pt-2">
                            <p class="light-blu-2 ">{{ $singolo['writers']}}</p>
                        </div>
                    </div>

                </div>
                <div class="col-5">
                    <h3 class="light-blu mb-3">Spec</h3>
                    <div class="row d-flex justify-content-between border-top border-bottom border-1 ">
                        <div class="col-3 pt-2">
                            <p class="light-blu fw-bold">Series:</p>
                        </div>
                        <div class="col-7 pt-2">
                           <p class="light-blu-2 ">{{strtoupper($singolo['series'])}}</p>                           
                        </div>
                    </div>
                    <div class="row d-flex justify-content-between  border-bottom border-1 ">
                        <div class="col-3 pt-2">
                            <p class="light-blu fw-bold">U.S. Price:</p>
                        </div>
                        <div class="col-7 pt-2">
                            <p >{{$singolo['price']}}</p>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-between  border-bottom border-1 ">
                        <div class="col-3 pt-2">
                            <p class="light-blu fw-bold">On Sale Date:</p>
                        </div>
                        <div class="col-7 pt-2">
                            <p >{{$singolo['sale_date']}}</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
        

    @endsection

