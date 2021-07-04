@extends('layouts.user')

@section('content')
<!-- Bagian Container Pencarian -->
<div class="container mt-5">
    <div class="row search-section">
        <div class="col">
            <div class="form-group mt-3 ml-3">
                <label for="exampleInputEmail1">Location</label>
                <div class="d-flex">
                    <i class="fa fa-map-marker-alt mr-3"></i>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$place}}">
                </div>
            </div>
        </div>
        <div class="col">
            <div class="form-group mt-3 ml-3">
                <label for="exampleInputEmail1">Date</label>
                <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$date}}">
            </div>
        </div>
        <div class="col">
            <div class="form-group mt-3 ml-3">
                <label for="exampleInputEmail1">Guests</label>
                <div class="d-flex">
                    <i class="fas fa-user mr-3"></i>
                    <input type="text" class="form-control" placeholder="add guests">
                </div>
            </div>
        </div>
        <div class="col-3 d-flex justify-content-center align-items-center">
            <div>
                <button class="btn-search">
                    <i class="fas fa-search"></i>
                    Search
                </button>
            </div>
        </div>
    </div>
</div>
<!-- Bagian Akhir Container Pencarian -->


<div class="container">
    <!-- Bagian Error -->
    <div class="alert alert-warning my-3" role="alert">
        <i class="fas fa-exclamation-triangle"></i>
        WARNING! This location is a high percentage and new cases of Covid-19.
    </div>
    <div class="alert alert-warning my-3" role="alert">
        If you want to continue choose this location, these are recommendations for save experience that you can try!
    </div>
    <!-- Bagian Akhir Error -->

    <!-- bagian filter dan sort -->
    <div class="d-flex">
        <div class="dropdown mr-3">
            <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Sort
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Filter
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
            </div>
        </div>
    </div>
    <!-- bagian akhir filter dan sort -->

    <!-- Bagian Content Search -->
    <div class="row py-4">
        <div class="col-4">
            <!-- Temp Solution -->
            <a href="{{route('detail')}}">
                <!--  -->
                <div class="card-search">
                    <img src="{{asset('images/details/rectangle 33.png')}}" alt="" class="card-img-top">
                    <div class="card-body d-flex justify-content-between px-3">
                        <div>
                            <p>2D1N at Wae Rebo Village</p>
                            <p>Kabupaten Manggarai, NTT</p>
                        </div>
                        <div class="icon">
                            <img src="{{asset('images/surface1.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-4">
            <!-- Temp Solution -->
            <a href="{{route('detail')}}">
                <div class="card-search">
                    <img src="{{asset('images/details/rectangle 33.png')}}" alt="" class="card-img-top">
                    <div class="card-body d-flex justify-content-between px-3">
                        <div>
                            <p>2D1N at Wae Rebo Village</p>
                            <p>Kabupaten Manggarai, NTT</p>
                        </div>
                        <div class="icon">
                            <img src="{{asset('images/surface1.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-4">
            <!-- Temp Solution -->
            <a href="{{route('detail')}}">
                <div class="card-search">
                    <img src="{{asset('images/details/rectangle 33.png')}}" alt="" class="card-img-top">
                    <div class="card-body d-flex justify-content-between px-3">
                        <div>
                            <p>2D1N at Wae Rebo Village</p>
                            <p>Kabupaten Manggarai, NTT</p>
                        </div>
                        <div class="icon">
                            <img src="{{asset('images/surface1.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <!-- Bagian akhir Content Search -->
</div>
@endsection