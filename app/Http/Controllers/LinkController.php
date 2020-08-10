<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\complaint;

class LinkController extends Controller
{
    public function pro()
    {
        return view('layouts.newproject');
    }

    public function cat()
    {
        return view('layouts.newcategory');
    }

    public function assigncat()
    {
        return view('layouts.assigncategory');
    }

    public function upload()
    {
        return view('layouts.upload');
    }

    public function home()
    {
        return view('layouts.admin');
    }
    public function getdata()
    {
        // $data = DB::table('complaint')->get();

        // if(count($data[0]) > 0){
        //     return view('layouts.showcomplaint',compact($data));
        // }else{
        //     return view('addcomplaint');
        // }
    }
}
