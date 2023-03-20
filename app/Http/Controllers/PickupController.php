<?php

namespace App\Http\Controllers;
use App\Models\Pickup;

use Auth;


use Illuminate\Http\Request;

class PickupController extends Controller
{
    public function index(){
        return view('pickup/schedulePickup');
    }
    public function viewPickupTimes(){
        $pickupTimes = Pickup::all();
        return view('pickup/viewPickupTimes',['pickupTimes'=>$pickupTimes]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'pickupLocation'=> 'required',
            'pickupDateTime'=> 'required',
            'user'=>'required',
        ]);

        $pickup = new Pickup([
            "pickupLocation" => $request->get('pickupLocation'),
            "pickupDateTime" => $request->get('pickupDateTime'),
            "userID"=>Auth::user()->id,
        ]);

        $pickup->save();
        return redirect('viewPickupTimes');
    }

}
