<?php

namespace App\Http\Controllers\Moderator;

use App\Http\Controllers\Controller;
use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function unansweredQuestion()
    {
        $unansweredQuestions = Question::where('status', 0)->paginate(10);
        return view('moderator.question.unanswered', compact('unansweredQuestions'));
    }
    public function answeredQuestion()
    {
        $answeredQuestions = Question::where('status', 1)->orderBy('id', 'desc')->paginate(10);
        return view('moderator.question.answered', compact('answeredQuestions'));
    }
}
