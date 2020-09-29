<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Seminar;
use App\Transaction;


class SeminarController extends Controller
{
    public function register($ID)
    {

        $user = Auth::user();
        $transaction = new Transaction;
        $seminar = new Seminar;
        $seminarPrice = DB::table('seminar_details')->where('id', $ID)->value('price');

        $transactionID = Str::random(6);

        $seminar->userID = $user->id;
        $seminar->seminarID = $ID;
        $seminar->transactionID = $transactionID;

        if ($seminarPrice == 0) {
            $transaction->id = $transactionID;
            $transaction->paymentMethod = 'null';
            $transaction->verified = True;
        } else {
            return view('seminar.checkout', [
                'seminar' => $seminar,
            ]);
        }

        $transaction->save();
        $seminar->save();

        return back();
    }
}
