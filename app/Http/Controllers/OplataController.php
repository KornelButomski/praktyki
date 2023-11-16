<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Oplata;

class OplataController extends Controller
{
    public function index() {
        return view('welcome', ['Oplatas' => Oplata::where('is_deleted', 0)->get()]);
    }

    public function finishedIt($id) {
        $newOplata = Oplata::find($id);
        $newOplata->is_deleted = 1;
        $newOplata->save();

        return redirect('/');
    }

    public function saveOplata(Request $request) {

        $newOplata = new Oplata;
        $newOplata->firstname = $request->oplata;
        $newOplata->lastname = $request->oplata1;
        $newOplata->rank = $request->oplata2;
        $newOplata->is_deleted = 0;
        $newOplata->save();

        return redirect('/');
    }
}
