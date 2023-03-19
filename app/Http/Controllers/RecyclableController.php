<?php

namespace App\Http\Controllers;
use App\Models\WasteProduct;


use Illuminate\Http\Request;

class RecyclableController extends Controller
{
    public function index(){
        return view('wasteProducts/recyclable');
    }
    public function viewRecyclable(){
        return view('wasteProducts/viewRecyclable');
    }
}
