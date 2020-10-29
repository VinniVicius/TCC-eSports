<?php

namespace App\Http\Controllers;

use App\Test_Result;
use Auth;
use Illuminate\Http\Request;

class aimTrainerView extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if (isset((Auth::user()->id))) {
            $resultCorsshairs = Test_Result::select('result_crosshair', 'created_at')
            ->where('user_id', Auth::user()->id)
            ->get();

            $count = 1;

            return view("layouts/aimTrainerView", compact('resultCorsshairs', 'count'));
        } else {
            return view("layouts/aimTrainerView");
        }

    }

    public function store(Request $request)
    {

        Test_Result::create([
            'result_crosshair' => $request->mediaTest,
            'user_id' => Auth::user()->id,
        ]);

        return redirect("/area-de-testes/aim-trainer");

    }
}
