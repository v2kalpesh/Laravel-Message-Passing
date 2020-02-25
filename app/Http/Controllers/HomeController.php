<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Facade\FlareClient\View;
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
        $users = DB::table('users')->select('name')->get();
        return view('home',['users' => $users]);
    }

    public function insert_category(Request $request)
    {
        $catname = $request->input('catname');
        $cat_pid = $request->input('cpid');
        $data = array('catname'=> $catname,'cat_parent_id' => $cat_pid);
        DB::table('category')->insert($data);
        echo "Category Inserted";
        return view('home');
    }

    public function insert_message(Request $request)
    {
        $message = $request->input('message');
        $catid = $request->input('catid');
        $data = array('message'=> $message,'cat_id' => $catid);
        DB::table('message')->insert($data);
        echo "Message Inserted";
        return view('home');
    }
}
