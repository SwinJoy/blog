<?php

namespace App\Http\Controllers;

use App\Http\Model\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function index()
    {

//        $pdo = DB::connection()->getPdo();
//        dd($pdo);
//        $users = DB::table('user')->where('user_id','>',1)->get();
//        dd($users);
//        $user = User::where('user_id',1)->get();
//        dd($user);
        $user = User::find(1);
        $user->user_name = 'wangwu';
        $user->update();
        dd($user);
        return view('welcome');
    }
}
