<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class messageController extends Controller
{
    public function index()
    {
        $messages = DB::table('message')->select('message','cat_id')->get();
        return view('messageList',['messages' => $messages ]);
    }
}
