<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Questions;

class questionController extends Controller
{
    public function getQuestion($number)
    {
        $questions = Questions::all()->random($number);

        return response()->json([
            'questions' => $questions 
        ], 200);
    }
}
