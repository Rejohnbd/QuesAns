<?php

namespace App\Http\Controllers\Moderator;

use App\Http\Controllers\Controller;
use App\Models\Question;
use App\Models\User;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function unansweredQuestion()
    {
        $unansweredQuestions = Question::where('status', 0)->paginate(10);
        $allHosts = User::where('role_id', 3)->get(['id', 'name']);
        return view('moderator.question.unanswered', compact('unansweredQuestions', 'allHosts'));
    }

    public function assignedQuestion()
    {
        $assignedQuestions = Question::where('status', 1)->orderBy('id', 'desc')->paginate(10);
        return view('moderator.question.assigned', compact('assignedQuestions'));
    }

    public function answeredQuestion()
    {
        $answeredQuestions = Question::where('status', 2)->orderBy('id', 'desc')->paginate(10);
        return view('moderator.question.answered', compact('answeredQuestions'));
    }

    public function assignQuestion(Request $request)
    {
        // Need To Validation Check
        $hostId = $request->host_id;
        $questionId = $request->question_id;

        $questionInfo = Question::find($questionId);
        $questionInfo->user_id = $hostId;
        $questionInfo->status = 1;
        $questionInfo->save();

        flash()->addSuccess('Question Assign Successfully');
        return redirect()->back();
    }
}
