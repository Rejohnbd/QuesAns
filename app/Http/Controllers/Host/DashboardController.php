<?php

namespace App\Http\Controllers\Host;

use App\Http\Controllers\Controller;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $assignedQuestions = Question::where('user_id', Auth::user()->id)->where('status', 1)->count();
        $answeredQuestions = Question::where('user_id', Auth::user()->id)->where('status', 2)->count();
        return view('host.dashboard.index', compact('assignedQuestions', 'answeredQuestions'));
    }
}
