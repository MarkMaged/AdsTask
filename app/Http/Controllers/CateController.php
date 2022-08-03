<?php

namespace App\Http\Controllers;

use App\Models\Ads;
use Illuminate\Http\Request;

class CateController extends Controller
{
    public function search_category(Request $request)
    {
        if ($request->category == 'All') {
            $ads = Ads::all();
            return view('welcome', ['ads' => $ads]);
        } elseif ($request->category == 'Cars') {
            $ads = Ads::select('*')->where('category', $request->category)->get();
            return view('welcome', ['ads' => $ads]);
        } elseif ($request->category == 'Sport') {
            $ads = Ads::select('*')->where('category', $request->category)->get();
            return view('welcome', ['ads' => $ads]);
        } elseif ($request->category == 'Nature') {
            $ads = Ads::select('*')->where('category', $request->category)->get();
            return view('welcome', ['ads' => $ads]);
        }
    }
}
