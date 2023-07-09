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
                'first_name'    => 'required',
                'last_name'     => 'required',
                'phone'         => 'required',
                'question'      => 'required',
            ],
            [
                'first_name.required'     => 'First Name is Required',
                'last_name.required'     => 'Last Name is Required',
                'question.required' => 'Provide Valid Vehicle Info',
            ]
        );

        if ($validator->fails()) :
        // Need to work Here When Goes to new page
        else :
            $newQuestion = new Question;
            $newQuestion->first_name    = $request->first_name;
            $newQuestion->last_name     = $request->last_name;
            $newQuestion->phone         = $request->country_code . '' . $request->phone;
            $newQuestion->question      = $request->question;
            $newQuestion->save();

            flash()->addSuccess('Question Submitted Successfully');
            return redirect()->back();
        // return response()->json([
        //     'status' => true
        // ]);
        endif;
    }
}
