<footer>
    <div class="container-fluid bk-blue">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="d-flex list-unstyled justify-content-between py-5 text-light">
                        @foreach ($listaIcone as $item )
                        <li class="d-flex align-items-center">
                            <div class="image-personal">
                                <img  src="{{ asset(Vite::asset($item['img'])) }}" alt="{{$item['nome']}}">
                            </div>
                            <p class="ms-1">{{$item['nome']}}</p>
    
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

    </div>
    <div class="container-fluid bk-image">
        <div class="container">
            <div class='row'>
                <div class="col-12 bk-image-2">
                    <div class="d-flex">

                        <div class="lista-dc-comics d-flex flex-column mx-2">
                            <p class="fw-bold text-light"> DC COMICS </p>
                                @foreach ($listaFooter['DcComicsArray'] as $item )
                                    <a href=" {{$item['href']}}"> {{$item['nome']}}</a>
                                @endforeach
                        </div>
                        <div class="lista-dc-comics d-flex flex-column mx-2">
                            <p class="fw-bold text-light"> DC  </p>
                                @foreach ($listaFooter['DcArray'] as $item )
                                    <a href=" {{$item['href']}}"> {{$item['nome']}}</a>
                                @endforeach
                        </div>
                        <div class="lista-dc-comics d-flex flex-column mx-2">
                            <p class="fw-bold text-light"> SITES </p>
                                @foreach ($listaFooter['SitesArray'] as $item )
                                    <a href=" {{$item['href']}}"> {{$item['nome']}}</a>
                                @endforeach
                        </div>
                        <div class="lista-dc-comics d-flex flex-column mx-2">
                            <p class="fw-bold text-light"> SHOP </p>
                                @foreach ($listaFooter['ShopArray'] as $item )
                                    <a href=" {{$item['href']}}"> {{$item['nome']}}</a>
                                @endforeach
                        </div>
                    </div>
                    <p class="text-light mt-3 personal-size">All Site TM and simbolo 2020 DC Entertainment, unless otherwise noted here. All rights reserved<br>Cookies Setting</p>
                </div>
            </div>
        </div>

    </div>
    <div class="container-fluid bk-grey">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-4">
                    <button class="btn-personal">SIGN-UP NOW</button>
                </div>
                <div class="col-8 d-flex align-items-center flex-row-reverse">
                    <div class="d-flex list-unstyled  py-5 text-light">
                        @foreach ($listaSocial as $item )
                        <img class="mx-1" src="{{ asset(Vite::asset($item['img'])) }}" alt="{{$item['nome']}}">
                        @endforeach
                    </div>
                    <h3 class="me-2 color-blu ">FOLLOW US</h3>
                </div>
            </div>
        </div>

    
</footer>