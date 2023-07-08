<?php

namespace App\Http\Controllers\Moderator;

use App\Http\Controllers\Controller;
use App\Models\Question;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalQuestions = Question::count();
        $answeredQuestions = Question::where('status', 2)->count();
        $unAnsweredQuestions = Question::where('status', 0)->count();
        return view('moderator.dashboard.index', compact('totalQuestions', 'answeredQuestions', 'unAnsweredQuestions'));
    }

    public function moderatorSidebarStatus(Request $request)
    {
        $unAnsweredQuestions = Question::where('status', 0)->count();
        $assignedQuestions = Question::where('status', 1)->count();
        $answeredQuestions = Question::where('status', 2)->count();

        return response()->json([
            'status'                => true,
            'unAnsweredQuestions'   => $unAnsweredQuestions,
            'assignedQuestions'     => $assignedQuestions,
            'answeredQuestions'     => $answeredQuestions
        ]);
    }
}
