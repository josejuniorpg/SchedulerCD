<?php

namespace App\Http\Controllers;

use App\Models\Classmate;
use App\Models\Matter;
use App\Models\Scheduler;
use App\Models\shiftdetail;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = User::all();
        $shiftD = shiftdetail::all();
        $matter =  Matter::all();
        $classmate = Classmate::all();
        $scheduler =  Scheduler::all();
        return view('home', compact('users', 'shiftD', 'matter', 'classmate', 'scheduler'));
    }

    public function show($id)
    {
        $user = User::find($id);
        return view('home', ['user' => $user]);
    }
}
