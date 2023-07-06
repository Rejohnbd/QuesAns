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
        $answeredQuestions = Question::where('status', 1)->count();
        $unAnsweredQuestions = Question::where('status', 0)->count();
        return view('moderator.dashboard.index', compact('totalQuestions', 'answeredQuestions', 'unAnsweredQuestions'));
    }
}
