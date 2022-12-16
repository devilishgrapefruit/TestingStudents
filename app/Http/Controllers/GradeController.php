<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GradeController extends Controller
{
    public function getGrade () {
        $grade = new Grade();
        $data = $grade->all();
        return view('results', ['result_data'=> $data] );
    }
}
