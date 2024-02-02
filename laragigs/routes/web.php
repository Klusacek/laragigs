<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Request;
use Spatie\Backtrace\Arguments\ReduceArgumentsAction;
use Symfony\Component\HttpFoundation\RateLimiter\RequestRateLimiterInterface;
use App\Models\Listing;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//All Listings
Route::get('/', function(){
    return view('listings',[
        'heading' => 'Lastest news',
        'listings' => Listing::all(),
    ]
    );
});

// Single Listing
Route::get('/listing/{listing}', function (Listing $listing) {
        return view('listing', [
            'listing'   => $listing
        ]);
    
});

