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
            $transaction->transactionID = $transactionID;
            $transaction->verified = True;
            $transaction->namaRekening = 'null';
            $transaction->filePath = 'null';
            $transaction->fileName = 'null';
        } else {
            return view('seminar.checkout', [
                'seminar' => $seminar,
            ]);
        }

        $transaction->save();
        $seminar->save();

        return back();
    }

    public function fileUpload(Request $req)
    {
        // Reference: https://www.positronx.io/laravel-file-upload-with-validation/
        $req->validate([
            'buktiTransfer' => 'required|mimes:jpeg,jpg,png|max:10000'
        ]);

        $transaction = new Transaction;
        $seminar = new Seminar;

        if ($req->file()) {
            $user = Auth::user();

            $fileName = str_replace(' ', '', $user->name) . '_' . time() . '_' . $req->buktiTransfer->getClientOriginalName();
            $filePath = $req->file('buktiTransfer')->storeAs('buktiTrf', $fileName, 'public');

            $transactionID = Str::random(6);

            $transaction->transactionID = $transactionID;
            $transaction->verified = False;
            $transaction->namaRekening = $req->namaRekening;
            $transaction->filePath = '/storage/' . $filePath;
            $transaction->fileName = str_replace(' ', '', $user->name) . '_' . time() . '_' . $req->buktiTransfer->getClientOriginalName();

            $seminar->userID = $user->id;
            $seminar->seminarID = 2;
            $seminar->transactionID = $transactionID;

            $seminar->save();
            $transaction->save();

            return redirect()->action('MailController@sendConfirmation', ['transactionID' => $transactionID]);
            // return redirect()->route('sendConfirmation', ['transactionID' => $transactionID]);
        }
    }
}
