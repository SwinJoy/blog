<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ViewController extends Controller
{
    public function index(){
//        $name = 'SwinJoy';
//        return view('my_laravel')->with('name',$name);
        $data = [
            'name'=>'SwinJoy',
            'age'=>20,
            'score'=>50
        ];
        $title = 'Swinjoy正在学习laravel课程';
        return view('my_laravel',compact('data','title'));
    }

    public function layouts()
    {
        return view('layouts');
    }
}
