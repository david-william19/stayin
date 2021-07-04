@extends('layouts.checkout')

@section('content')
<div class="container">
    <div class="row my-3">
        <div class="col">
            <div class="card mb-3">
                <div class="card-body">
                    <h4>Select Payment</h4>
                    <div id="accordion">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label" for="exampleCheck1">Virtual Account</label>
                                        </div>
                                    </button>
                                </h5>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label" for="exampleCheck1">Credit Card</label>
                                        </div>
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label" for="exampleCheck1">Bank Transfer</label>
                                        </div>
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                    </div>
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
    <div class="row my-3 mx-1 border rounded p-3">
        <div class="col">
            <h4>Please Transfer to</h4>
            <div class="card">
                <div class="card-header">
                    BCA (Bank Central Asia)
                </div>
                <div class="card-body">
                    <p class="font-weight-light">Account Number: 126 0877 2216 2211</p>
                    <p class="font-weight-light">Account Name: PT Bank Central Asia</p>
                </div>
            </div>
        </div>

        <div class="col d-flex flex-column justify-content-center">
            <h5>Tata Cara Pembayaran (Transfer ATM)</h5>
            <ul class="ml-5 font-weight-light">
                <li>Pilih transaksi lainnya > Transfer > Ke Rek BCA Virtual Account</li>
                <li>Masukan nomor virtual account 126 0877 2216 2211 dan pilih Benar</li>
                <li>Periksa Informasi yang tertera. </li>
            </ul>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col">
            <div class="d-flex">
                <p class="term">By clicking the button below, you have agreed to our Privacy Policy and Terms & Conditions of StayIn.</p>
                <a href="{{route('pembayaran-3')}}" class="btn-continue px-5">Pay</a>
            </div>
        </div>
    </div>
</div>
@endsection