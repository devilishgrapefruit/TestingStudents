<?php

namespace App\Http\Controllers;
use App\Models\Test;
use App\Http\Requests\TestRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function addTest(TestRequest $req) {
        $test = new Test();
        $test->title = $req->input('title');
        $test->title = $req->input('discipline');
        $test->author_id = Auth::id();=
        $test->save();
        return redirect()->route('addQuestion');
    }

    public function index()
    {
        $tests = DB::table('tests')->get();

        return view('tests', ['tests' => $tests]);
    }

    public function deleteTest($id){
        DB::table('tests')->where('id', $id)->delete();
        return redirect()->route('tests');
    }


}
