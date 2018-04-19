<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestControler extends Controller
{
    public function index(){
        $user=DB::table('users')->all();
        var_dump($user);
    }
}
