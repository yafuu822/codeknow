<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gyosei;
use DB;

class GyoseiController extends Controller
{
    //
    public function index(){
    $query = Gyosei::query();
    $lists = $query->orderBy('id','desc')->paginate(10);
    return view('gyosei.index')->with('lists',$lists);

    }

}
