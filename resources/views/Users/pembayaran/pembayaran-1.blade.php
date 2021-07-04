@extends('layouts.checkout')

@section('content')
<div class="container">
    <div class="row my-3">
        <div class="col">
            <div class="card mb-3">
                <div class="card-body">
                    <h4>Your Information</h4>

                    <form action="">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" class="form-control" placeholder="Doe">
                        </div>
                        <div class="d-flex">
                            <div class="form-group w-25 mr-4">
                                <label for="">Phone Number</label>
                                <select class="custom-select" id="inputGroupSelect01">
                                    <option selected>+62</option>
                                    <option value="1">+10</option>
                                    <option value="2">+9</option>
                                    <option value="3">+12</option>
                                </select>
                            </div>
                            <div class="form-group w-50 mt-1">
                                <label for=""></label>
                                <input type="text" class="form-control" placeholder="Doe">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Email</label>
                            <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                    </form>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h4>Addition</h4>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Covid-19 Insurance</label>
                    </div>
                    <p>Get a comprehensive COVID-19 protection that covers hospitalisation, medical check up fee (including Rapid or PCR Swab Test), and many more.
                    </p>

                    <h3 class="text-right">Rp.50.000</h3>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h4>Package Details</h4>

                    <div class="d-flex justify-content-between">

                        <img src="{{asset('images/hotel1.png')}}" alt="">
                        <div>
                            <b class="text-dark ">Private Tour for 5 participants + Stay</b>
                            <p class="font-weight-light m-0 mt-3"><i class="fas fa-bed"></i> Free Stay</p>
                            <p class="font-weight-light m-0"><i class="fas fa-user"></i> 5 guest</p>
                        </div>
                    </div>
                    <div class="check d-flex justify-content-between align-items-center p-3 my-3">
                        <p>Check-in</p>
                        <p>03/07/2021</p>
                    </div>
                    <div class="check d-flex justify-content-between align-items-center p-3">
                        <p>Check-out</p>
                        <p>07/07/2021</p>
                    </div>

                    <hr>

                    <div class="d-flex justify-content-between align-items-center">
                        <p>Total</p>
                        <p>Rp 7.500.000</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="d-flex">
                <p class="term">By clicking the button below, you have agreed to our Privacy Policy and Terms & Conditions of StayIn.</p>
                <a href="{{route('pembayaran-2')}}" class="btn-continue">Continue to Payment</a>
            </div>
        </div>
    </div>
</div>
@endsection