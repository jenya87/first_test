<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tropa;
use Yajra\Datatables\Datatables;
 
class Datacontroller extends Controller
{
   public function index()
    {
     //dd(Tropa::take(50)->get());
     return view('data.index');
    }
   
   public function draw()
    {
        return Datatables::of( $tropa=Tropa::all())->make(true);
    }

}
