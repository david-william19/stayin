@extends('layouts.checkout')

@section('content')
<div class="container">
    <h3>Confirmation for Complete your Book</h3>
    <div class="row border rounded">
        <div class="col p-3">
            <h5>Package Details</h5>
            <div class="d-flex">
                <p class="font-weight-light">Booking ID</p>
                <p class="font-weight-light ml-5">#121281298192191</p>
            </div>

            <div class="d-flex">

                <img src="{{asset('images/hotel1.png')}}" class="mr-5" alt="">
                <div>
                    <b class="text-dark ">Private Tour for 5 participants + Stay</b>
                    <p class="font-weight-light m-0 my-3"><i class="fas fa-bed"></i> Free Stay</p>
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
                <div class="d-flex align-items-center">
                    <p class="mr-5">Rp 7.500.000</p>
                    <a href="" class="btn-continue px-5">PAID</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row rounded border mt-3">
        <div class="col p-3 d-flex align-items-center">
            <p>Check your email to see the details.</p>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col text-center d-flex flex-column align-items-center">
            <a href="{{route('home')}}" class="btn-continue disabled text-center px-4 mt-5">COMPLETED</a>
            <a href="" class="btn-continue text-center px-4 mt-5">PURCHASE LIST</a>
        </div>
    </div>
</div>
@endsection