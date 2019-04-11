<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class FormController extends Controller
{
    // GET / = welcome.blade.php
    public function welcome(Request $request)
    {
        $gender = $request->session()->get('gender', '');
        $total = $request->session()->get('total');
        $percent = $request->session()->get('percent', '');
        $number1 = $request->session()->get('number1', '');
        $number2 = $request->session()->get('number2', '');

//        dump($gender);
//        dump($percent);
        return view('welcome')->with([
            'gender' => $gender,
            'total' => $total,
            'percent' => $percent,
            'number1' => $number1,
            'number2' => $number2,
        ]);
    }

    // GET request process, /resources/views/welcome.blade.php
    public function calProcess(Request $request)
    {
        $request->validate([
            'number1' => 'required|numeric',
            'number2' => 'required|numeric'
        ]);

        // retrieve the gender input field
        $gender = $request->input('gender');

        // retrieve the income1 and income2 input field
        $number1 = $request->input('number1');
        $number2 = $request->input('number2');
        $total = $number1 + $number2;

        // if checkbox contains in request is true
        $percent = '';
        if ($request->has('percent')) {
            if ($total < 1) {
                $percent = "Highly suggest for you to get some help.";
            }
            if (in_array($total, range(1, 14999))) {
                $percent = "Your are in the 10.7% annual household income under $15,000 in U.S.";
            }
            if (in_array($total, range(15000, 24999))) {
                $percent = "Your are in the 9.6% of annual household income between $15,000 to $25,000 in U.S.";
            }
            if (in_array($total, range(25000, 34999))) {
                $percent = "Your are in the 8.2% annual household income between $25,000 to $35,000 in U.S.";
            }
            if (in_array($total, range(35000, 49999))) {
                $percent = "Your are in the 12.3% annual household income between $35,000 to $50,000 in U.S.";
            }
            if (in_array($total, range(50000, 74999))) {
                $percent = "Your are in the 16.5% annual household income between $50,000 to $75,000 in U.S.";
            }
            if (in_array($total, range(75000, 99999))) {
                $percent = "Your are in the 12.5% annual household income between $75,000 to $100,000 in U.S.";
            }
            if (in_array($total, range(100000, 149999))) {
                $percent = "Your are in the 14.5% annual household income between $100,000 to $150,000 in U.S.";
            }
            if (in_array($total, range(150000, 199999))) {
                $percent = "Your are in the 7% annual household income between $150,000 to $200,000 in U.S.";
            }
            if ($total > 200000) {
                $percent = "Your are in the 7.7% annual household income above $200,000 in U.S.";
            }
        }

        // redirect back to the welcome page w/ the
        // gender, total, etc. through flashed session
        return redirect('/')->with([
            'gender' => $gender,
            'total' => $total,
            'percent' => $percent,
            'number1' => $number1,
            'number2' => $number2,
        ]);
    }

    // helper email
    public function help()
    {
        return 'Need help? Email us at ' . config('mail.supportEmail');
    }
}