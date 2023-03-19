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
        $pickupTimes = Pickup::all();
        return view('pickup/viewPickupTimes',['pickupTimes'=>$pickupTimes]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'pickupLocation'=> 'required',
            'pickupDateTime'=> 'required',
        ]);

        $pickup = new Pickup([
            "pickupLocation" => $request->get('pickupLocation'),
            "pickupDateTime" => $request->get('pickupDateTime'),

        ]);

        $pickup->save();
        return redirect('viewPickupTimes');
    }

}
