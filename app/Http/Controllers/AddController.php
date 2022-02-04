<?php

namespace App\Http\Controllers;

use App\Models\Addfriend;
use App\Models\Block;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AddController extends Controller
{
    public function index(Request $request)
    {
        $friends = new Addfriend;
        $friends->user_id_send = Auth::user()->id;
        $friends->user_id_receive = $request->id;
        $friends->save();
    }
    public function showrequests()
    {

        $friends = Addfriend::all()->where('status', 'pending');
        return view('friend-requests', ['friends' => $friends]);
    }
    public function showfriends()
    {

        $friends = Addfriend::where('status', 'accepted')->get();
        // $Blocks = Block::where('status', false)->get();
        return view('my-friends', ['friends' => $friends]);
    }
}
