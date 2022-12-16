<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Http\Request;


Class UserController extends Controller
{
    public function addUser(Request $req){
        $user = new User();
        $user->name = $req->input('name');
        $user->password = $req->input('password');
        $user->email = $req->input('email');
        $user->save();
        return redirect()->route('users');
    }
    public function index()
    {
        $users = DB::table('users')->get();

        return view('users', ['users' => $users]);
    }


    public function deleteUser($id){
        $users = DB::table('users')->where('id', $id)->delete();
        return redirect()->route('users');
    }


}

