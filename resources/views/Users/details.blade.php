@extends('layouts.user')

@section('content')
<div class="container mt-3">
    <!-- bagian header detail -->
    <div class="d-flex align-items-center">
        <h5 class="mr-4">2D1N at Wae Rebo Village</h5>
        <span class="info-detail">Percentage Covid-19: 0,9%</span>
    </div>
    <div class="mt-3">
        <p><i class="fa fa-map-marker-alt mr-3" style="width: 20px; color:red"></i>Satar Lenda, Satar Mese Barat, Kabupaten Manggarai, Nusa Tenggara Timur.</p>
        <p><img src="{{asset('images/surface1.png')}}" class="mr-3" width="20" alt="">CHSE Certified. All existing activities have followed health protocols and the stay has been sterilized.</p>
    </div>
    <!-- bagian akhir header detail -->

    <!-- bagian images detail -->
    <div class="container-grid">
        <div class="grid-2">
            <img src="{{asset('images/details/rectangle 33.png')}}" alt="">
        </div>
        <div class="grid-3">
            <img src="{{asset('images/details/rectangle 34.png')}}" alt="">
        </div>
        <div class="grid-1">
            <img src="{{asset('images/details/rectangle 32.png')}}" alt="">
        </div>
        <div class="grid-4">
            <img src="{{asset('images/details/rectangle 35.png')}}" alt="">
        </div>
    </div>
    <!-- bagian akhir images detail -->
    <div class="row">
        <div class="col-7 border rounded p-3 mr-5">
            <h4>Reviews</h4>
            <span>4.9</span>
            <p>from 88 Reviews</p>

        </div>
        <div class="col-4 border rounded p-3">
            <div class="">
                <h4 class="font-weight-light">Price start from</h4>
                <h2>Rp.1.550.000 / <span class="font-weight-light">person</span></h2>
                <form action="">
                    <div class="d-flex">
                        <div class="form-group w-50 mr-2">
                            <label for="">Check-In</label>
                            <input type="date" class="form-control" placeholder="Doe">
                        </div>
                        <div class="form-group w-50">
                            <label for="">Check-out</label>
                            <input type="date" class="form-control" placeholder="Doe">
                        </div>
                    </div>
                    <label for="">Guests</label>
                    <input type="text" class="form-control" placeholder="Doe">
                    <button type="submit" class="btn-buy">Select Package</button>
                </form>
            </div>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col border rounded p-3">
            <h4>WHAT YOU GET ?</h4>
            <ul class="pl-5">
                <li>See the only village that still maintains the traditional Manggarai cone-shaped house in Wae Rebo
                </li>
                <li>Marvel at the lovely little village surrounded by gorgeous mountains and dense forests
                </li>
                <li>Visit the circular rice fields that resemble cobwebs
                </li>
                <li>Hear stories from centuries ago about the ritual of dividing rice fields to villagers</li>
            </ul>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col p-3 border rounded">
            <h4>PACKAGES / BUNDLES</h4>

        </div>
    </div>
    <div class="row my-5">
        <div class="col p-3 border rounded">
            <h4 class="text-center">REVIEWS</h4>
            <p class="text-center"><span class="rate">4.9</span> from 88 reviews</p>
            <div class="card">
                <div class="card-body">
                    <div class="d-flex">
                        <span class="rate p-4">4.7</span>
                        <div class="ml-4">
                            <h4 class="d-inline-block">Thasya Ummul K</h4>
                            <p class=" text-muted">10 Juli 2021 - Solo</p>
                        </div>
                    </div>
                    <p class="mt-4">Pingin lagii</p>
                </div>
            </div>
            <div class="card my-5">
                <div class="card-body">
                    <div class="d-flex">
                        <span class="rate p-4">4.7</span>
                        <div class="ml-4">
                            <h4 class="d-inline-block">Thasya Ummul K</h4>
                            <p class=" text-muted">10 Juli 2021 - Solo</p>
                        </div>
                    </div>
                    <p class="mt-4">Pingin lagii</p>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="d-flex">
                        <span class="rate p-4">4.7</span>
                        <div class="ml-4">
                            <h4 class="d-inline-block">Thasya Ummul K</h4>
                            <p class=" text-muted">10 Juli 2021 - Solo</p>
                        </div>
                    </div>
                    <p class="mt-4">Pingin lagii</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection