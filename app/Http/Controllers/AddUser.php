<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AddUser extends Controller
{
    public function index(){
        return view('index');
    }
    public function add(Request $request){

            User::create([
                'name' => $request->name
            ]);
    }
}
