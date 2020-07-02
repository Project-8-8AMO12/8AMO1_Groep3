<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use App\Http\Requests;

use App\Http\Controllers\Controller;

class WelcomeController extends Controller {
    public function index(){
        $home_page = DB::table('home_pages')
            ->get();
        return view('welcome',['home_page'=>$home_page]);
    }
}
