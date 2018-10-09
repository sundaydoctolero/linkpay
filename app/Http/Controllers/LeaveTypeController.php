<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LeaveType;
use App\Http\Requests;

class LeaveTypeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return view('admin.setup.leave_type');
    }

    public function getTable(){
        return LeaveType::all();
    }
}
