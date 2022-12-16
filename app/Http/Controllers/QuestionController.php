<?php

namespace App\Http\Controllers;
use App\Http\Requests\QuestionRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuestionController extends Controller
{
    public function add(QuestionRequest $req) {
        $question = new Question();
        $test = DB::select('select * from test where title = :title', ['title' => $req->input('title_test')]);
        $question->test_id = $test->id;
        $question->right_answer = $req->input('right_answer');
        $question->save();
        return redirect()->route('add_questions');
    }

    public function addAnswer(Request $req, Question $question) {
        $answer = new Answer();
        $test = DB::select('select * from question where id = :id');
        $answer->question_id = $question->id;
        $answer->right_answer = $req->input('right_answer');
        $question->save();
        return redirect()->route('add_questions');
    }
}
