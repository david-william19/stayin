<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function search(Request $request)
    {
        $place = $request->place;
        $date = $request->date;
        return view('Users.search', compact('place', 'date'));
    }

    public function detail()
    {
        return view('Users.details');
    }

    public function pembayaran1()
    {
        return view('Users.pembayaran.pembayaran-1');
    }

    public function pembayaran2()
    {
        return view('Users.pembayaran.pembayaran-2');
    }

    public function pembayaran3()
    {
        return view('Users.pembayaran.pembayaran-3');
    }

    public function pembayaran4()
    {
        return view('Users.pembayaran.pembayaran-4');
    }
}
