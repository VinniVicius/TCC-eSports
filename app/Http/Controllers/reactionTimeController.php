<?php

namespace App\Http\Controllers;

use App\Test_Result;
use Illuminate\Http\Request;
use Auth;

class reactionTimeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("layouts/reactionTimeView");
    }

    public function store(Request $request)
    {

        Test_Result::create([
            'result_react' => $request->mediaReact,
            'user_id' => Auth::user()->id,
        ]);

        return redirect("/area-de-testes/reaction-time");

    }

}
