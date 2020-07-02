<?php

namespace App\Http\Controllers;

use DB;

use Illuminate\Http\Request;
use App\Home_page;

class BeheerController extends Controller
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
        $home_page = DB::table('home_pages')
            ->get();

        return view('beheer', ['home_page'=>$home_page]);
    }

    public function submit(Request $request) {
        $this->validate($request, [
            'header' => 'required',
            'body' => 'required'
        ]);

        Home_page::where('id', 1)->update($request->except('_token'));



        return redirect('/')->with('success', 'Home page is geupdate');
    }
}
