<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    function index(){
        $users = User::all();
        $data['users'] = $users;
        return view('user.index', ['users' => $users]);
    }
    function edit($id){
        $user = User::find($id);
        $data['user'] = $user;
        return view('user.edit', $data);
    }
    function edit_action(Request $req){
        print_r($req->input());
    }
}
