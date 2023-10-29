<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BaiViet;
class BaiVietController extends Controller
{
    function index(){
        $data = BaiViet::all();
        return view('index',compact('data'));
    }
    function add(){
        return view('add');
    }
    function save(Request $request){
        $data = [
            "title" => $request->input('title'),
            "content" => $request->input('content'),
            "image" => $request->input('image'),
        ];
        BaiViet::create($data);
        return redirect()->route('baiviet.index');
    }
    
}
