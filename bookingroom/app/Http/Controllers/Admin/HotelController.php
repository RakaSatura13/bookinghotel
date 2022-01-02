<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Hotel;

class HotelController extends Controller
{
    public function index()
    {
        $hotel = Hotel::all();
        return view('admin.hotel.index',compact('hotel'));
    }
}
