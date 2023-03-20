<?php

namespace App\Http\Controllers;
use App\Models\Recyclable;
use Illuminate\Support\Facades\File;


use Illuminate\Http\Request;

class RecyclableController extends Controller
{
    public function index(){
        return view('wasteProducts/recyclable');
    }
    public function viewRecyclable(){
        $wasteProducts = Recyclable::all();
        return view('wasteProducts/viewRecyclable',['wasteProducts'=>$wasteProducts]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'wasteName'=> 'required',
            'wasteDescription'=> 'required',
            'wasteImage'=> 'required',
        ]);

        $wastes = time().$request->file('wasteImage')->getClientOriginalName();
        $pathWaste = $request->file('wasteImage')->storeAs('wasteProducts', $wastes, 'public');

        $wasteProducts = new Recyclable([
            "wasteName" => $request->get('wasteName'),
            "wasteDescription" => $request->get('wasteDescription'),
            "wasteImage" => '/storage/'.$pathWaste,
        ]);

        $wasteProducts->save();
        return redirect('viewRecyclable');
    }
    public function displayWasteProducts(){
        $wastes = Recyclable::all();
        return view('wasteProducts/displayWasteProducts',['wastes'=>$wastes]);
    }
}
