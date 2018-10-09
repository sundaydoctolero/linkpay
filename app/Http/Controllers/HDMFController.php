<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Pagibig;

class HDMFController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return view('admin.setup.pagibig');
    }

    public function getTable(){
        return Pagibig::all();
    }

}
