<?php

namespace App\Http\Controllers\Host;

use App\Http\Controllers\Controller;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuestionController extends Controller
{
    public function questionUnanswered()
    {
        $unAnsweredQuestions = Question::where('user_id', Auth::user()->id)->where('status', 1)->paginate(10);
        return view('host.question.unanswered', compact('unAnsweredQuestions'));
    }

    public function questionAanswered(Request $request)
    {
        $questionId = $request->question_id;

        $questionInfo = Question::find($questionId);
        $questionInfo->answer_time = now();
        $questionInfo->status = 2;
        $questionInfo->save();

        flash()->addSuccess('Question Answered');
        return redirect()->back();
    }

    public function questionAansweredAll()
    {
        $answeredQuestions = Question::where('user_id', Auth::user()->id)->where('status', 2)->paginate(10);
        return view('host.question.answered', compact('answeredQuestions'));
    }
}
