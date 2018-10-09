<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PhilHealth;
use App\Http\Requests;

class PHICController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return view('admin.setup.phil_health');
    }

    public function getTable(){
        return PhilHealth::all();
    }
}
