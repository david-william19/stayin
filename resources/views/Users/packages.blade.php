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

    <!-- bagian content experience -->
    <div class="container mt-5">
        <div class="row">
            <div class="col d-flex justify-content-between align-items-center">
                <h4>New Experience</h4>
                <a href="#" class="font-weight-light">View All</a>
            </div>
        </div>
        <div class="row">
            <div class="col grid-container">
                <div class="grid-item-large bg-primary">
                    <div class="card">
                        <div class="card-header">

                        </div>
                        <div class="card-body">

                        </div>
                    </div>
                </div>
                <div class="grid-item bg-danger">2</div>
                <div class="grid-item bg-warning">3</div>
                <div class="grid-item bg-secondary">4</div>
                <div class="grid-item bg-success">5</div>
            </div>
        </div>
    </div>
    <!-- bagian akhir content experience -->

    <!-- bagian content Recommendations -->
    <div class="container mt-5">
        <div class="row">
            <div class="col d-flex justify-content-between align-items-center">
                <h4>Recommendations</h4>
                <a href="#" class="font-weight-light">View All</a>
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

    <!-- bagian content News -->
    <div class="container mt-5">
        <div class="row">
            <div class="col d-flex justify-content-between align-items-center">
                <h4>News</h4>
                <a href="#" class="font-weight-light">View All</a>
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
    <!-- bagian akhir content News -->

    <!-- bagian content Customer Satisfaction -->
    <div class="container mt-5">
        <p>bagian customer satisfaction</p>
    </div>
    <!-- bagian akhir content Customer Satisfaction -->

    <!-- bagian content tentang stayIn -->
    <div class="container my-5">
        <div class="row">
            <div class="col d-flex justify-content-between align-items-center">
                <h4 class="mb-3">why Stay with <span>StayIn</span></h4>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <div class="card p-3"></div>
            </div>
            <div class="col">
                <div class="card p-3"></div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card p-3"></div>
            </div>
            <div class="col">
                <div class="card p-3"></div>
            </div>
        </div>
    </div>
    <!-- bagian akhir content tentang stayIn -->

    <div class="container-fluid footer">
        <p>bagian footer</p>
    </div>
@endsection
