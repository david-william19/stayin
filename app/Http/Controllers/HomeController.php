<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use App\Models\Rating;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $product = Product::all();
        $rating = Rating::all();
        return view('Users.home', compact("product", "rating"));
    }

    public function adminHome()
    {
        return view('Admin.dashboard');
    }

    public function mitraHome()
    {
        return view('Mitra.dashboard');
    }
}
