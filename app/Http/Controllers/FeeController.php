<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Fee;
use App\models\User;

class FeeController extends Controller
{
    public function index() {
        return view('mainPage', ['Fees' => Fee::where('is_deleted', 0)->get()]);
    }

    public function login() {
        /**
        *$newUser = User::find($id);
        *$newUser->save();
        */

        return view('mainPage');
    }

    public function finishedIt($id) {
        $newFee = Fee::find($id);
        $newFee->is_deleted = 1;
        $newFee->save();

        return redirect('mainPage');
    }

    public function saveFee(Request $request) {

        $newFee = new Fee;
        $newFee->firstname = $request->fee;
        $newFee->lastname = $request->fee1;
        $newFee->rank = $request->fee2;
        $newFee->is_deleted = 0;
        $newFee->save();

        return redirect('mainPage');
    }
}
