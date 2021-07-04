@extends('layouts.user')

@section('content')
<!-- bagian banner -->
<div class="container-fluid">
    <div id="image-slider" class="splide">
        <div class="splide__track">
            <ul class="splide__list">
                <li class="splide__slide">
                    <img src="{{asset('images/banner.png')}}">
                </li>
                <li class="splide__slide mx-5">
                    <img src="{{asset('images/banner.png')}}">
                </li>
                <li class="splide__slide">
                    <img src="{{asset('images/banner.png')}}">
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- bagian akhir banner -->

<!-- bagian form pencarian -->
<div class="container mt-5">
    <div class="row search-section">
        <div class="col">
            <div class="form-group mt-3 ml-3">
                <label for="exampleInputEmail1">Location</label>
                <i class="fa fa-map-marker-alt"></i>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Where are you going?">
            </div>
        </div>
        <div class="col">
            <div class="form-group mt-3 ml-3">
                <label for="exampleInputEmail1">Date</label>
                <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
        </div>
        <div class="col-3 d-flex justify-content-center align-items-center">
            <div>
                <button class="btn btn-search">
                    <i class="fas fa-search"></i>
                    Search
                </button>
            </div>
        </div>
    </div>
</div>
<!-- bagian akhir form pencarian -->

<!-- bagian content bundle -->
<div class="container my-4">
    <div class="row">
        <div class="col d-flex justify-content-between align-items-center">
            <h4>Get Bundle, Get Cheaper</h4>
            <a href="#" class="font-weight-light">View All</a>
        </div>
    </div>

    <div class="row">
        <div class="col my-3 p-3 rounded border">
            <h3 class="my-3">2D1N at Wae Rebo Village</h3>
            <div class="d-flex">
                <img src="{{asset('images/glampinh.png')}}" class="d-inline" alt="">
                <p class="description-bundle">Wae Rebo is a remote and mysterious traditional village in Manggarai Regency, East Nusa Tenggara. Located at an altitude of 1,200 m above sea level. In this village there are only 7 main houses or what is known as Mbaru Niang. So, are you ready to breathe in some fresh air and take in stunning views of the mountains and lush forests as you explore? </p>
            </div>
            <div class="d-flex justify-content-end">
                <a href="" class="btn-details p-3 mr-3">See Details</a>
                <a href="" class="btn-book p-3">Book Now</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col my-3 p-3 rounded border">
            <h3 class="my-3">2D1N at Wae Rebo Village</h3>
            <div class="d-flex">
                <img src="{{asset('images/glampinh.png')}}" class="d-inline" alt="">
                <p class="description-bundle">Wae Rebo is a remote and mysterious traditional village in Manggarai Regency, East Nusa Tenggara. Located at an altitude of 1,200 m above sea level. In this village there are only 7 main houses or what is known as Mbaru Niang. So, are you ready to breathe in some fresh air and take in stunning views of the mountains and lush forests as you explore? </p>
            </div>
            <div class="d-flex justify-content-end">
                <a href="" class="btn-details p-3 mr-3">See Details</a>
                <a href="" class="btn-book p-3">Book Now</a>
            </div>
        </div>
    </div>
</div>

<!-- bagian akhir content bundle -->

<!-- bagian content tentang stayIn -->
<div class="container my-5">
    <div class="row">
        <div class="col d-flex justify-content-between align-items-center">

            <h4 class="mb-3">why Stay with <span>StayIn</span></h4>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col p-3">
            <div class="about-card p-3 d-flex justify-content-between">
                <img src="{{asset('images/icons/Group.png')}}" alt="">
                <div class="p-3">
                    <h4>New Experience</h4>
                    <p>An Unique experience from StayIn that will not bored you.</p>
                </div>
            </div>
        </div>
        <div class="col p-3">
            <div class="about-card p-3 d-flex justify-content-between">
                <img src="{{asset('images/icons/best-price 1.png')}}" alt="">
                <div class="p-3">
                    <h4>Competitive Price</h4>
                    <p>The prices offered are affordable and competitive.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col p-3">
            <div class="about-card p-3 d-flex justify-content-between">
                <img src="{{asset('images/icons/rating 1.png')}}" alt="">
                <div class="p-3">
                    <h4>Real Ratings and Reviews</h4>
                    <p>Real ratings and review from hotel guests in StayIn.</p>
                </div>
            </div>
        </div>
        <div class="col p-3">
            <div class="about-card p-3 d-flex justify-content-between">
                <img src="{{asset('images/icons/guaranteed 1.png')}}" weight="100" alt="">
                <div class="p-3">
                    <h4>Safe Guaranteed</h4>
                    <p>StayIn will covered your stay with asurance.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- bagian akhir content tentang stayIn -->


<!-- bagian content Recommendations -->
<div class="container mt-5">
    <div class="row">
        <div class="col">
            <h4 class="text-center">Recommendations</h4>
            <p class="text-center font-weight-light">Recommendations for unique experiences that you can try with the lowest rate of Covid-19 cases.</p>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="card p-3"></div>
        </div>
        <div class="col">
            <div class="card p-3"></div>
        </div>
        <div class="col">
            <div class="card p-3"></div>
        </div>
    </div>
</div>
<!-- bagian akhir content Recommendations -->

<!-- bagian content Customer Satisfaction -->
<div class="container mt-5">
    <h4>CUSTOMER SATISFACTION</h4>
    <div class="row">
        <div class="col">
            <img src="{{asset('images/satisfaction.png')}}" width="400" class="my-4" alt="">
        </div>
        <div class="col d-flex justify-content-center align-items-center">
            <div>
                <h5>Family Trip Labuan Bajo</h5>
                <p class="comment">“Nice Trip with StayIn! I really recommended this new experience.”</p>
                <p class="text-muted">- Aa Rafatar</p>
                <p class="text-muted">23 Juli 2021</p>
            </div>
        </div>
    </div>
</div>
<!-- bagian akhir content Customer Satisfaction -->

<div class="container-fluid footer">
    <p>bagian footer</p>
</div>
@endsection