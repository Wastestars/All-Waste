<?php

namespace App\Http\Controllers;
use App\Models\Pickup;


use Illuminate\Http\Request;

class PickupController extends Controller
{
    public function index(){
        return view('pickup/schedulePickup');
    }
    public function viewPickupTimes(){
        return view('pickup/viewPickupTimes');
    }
}
