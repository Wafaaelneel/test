<?php

namespace App\Http\Controllers;

use App\Models\Block;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
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
        return view('home');
    }
    public function people()
    {

        $friends = User::where('id', '!=', Auth::user()->id)->get();
        $blocks = Block::where('status', false)->get();
        return view('profiles', ['friends' => $friends, 'blocks' => $blocks]);
    }
    public function show(Request $request, $name)
    {
        $friends = User::where('id', $request->id)->get();
        return view('people-profile', ['friends' => $friends, 'name' => $name]);
    }
    // public function change(Request $request)
    // {

    //     $friends = block::find($request->id);
    //     $friends->status = $request->status;
    //     $friends->save();
    // }

    // public function block()
    // {
    //     $friends = Block::where('status', false)->get();
    //     return view('profiles', ['friends' => $friends]);
    // }
}
