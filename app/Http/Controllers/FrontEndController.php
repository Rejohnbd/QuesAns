<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index()
    {
        return view('web.index');
    }

    public function submitQuestion(Request $request)
    {
        $validator = validator(
            $request->all(),
            [
                'name'              => 'required',
                'question'          => 'required',
            ],
            [
                'name.required'     => 'Vehicle is Required',
                'question.required' => 'Provide Valid Vehicle Info',
            ]
        );

        if ($validator->fails()) :
        // Need to work Here
        else :
            $newQuestion = new Question;
            $newQuestion->name = $request->name;
            $newQuestion->question = $request->question;
            $newQuestion->save();

            flash()->addSuccess('Question Submitted Successfully');

            return redirect()->back();

        // return response()->json([
        //     'status' => true
        // ]);
        endif;
    }
}
