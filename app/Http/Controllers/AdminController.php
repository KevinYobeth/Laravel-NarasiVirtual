<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Transaction;
use RealRashid\SweetAlert\Facades\Alert;

class AdminController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        if ($user->role == 0)  return back();

        $transData = DB::table('transactions')
            ->leftJoin('seminars', 'seminars.transactionID', '=', 'transactions.transactionID')
            ->join('users', 'users.id', '=', 'seminars.userID');

        if (session('id')) {
            $transID = session('id');

            $detailData = DB::table('transactions')
                ->leftJoin('seminars', 'seminars.transactionID', '=', 'transactions.transactionID')
                ->join('users', 'users.id', '=', 'seminars.userID')
                ->where('transactions.transactionID', $transID)->first();

            Alert::image('Nama: ' . $detailData->name, 'Nama Rek: ' . $detailData->namaRekening, url($detailData->filePath), 'Image Width', 'Image Height');
            // dd($transData->get());
        }

        return view('admin', [
            'transactions' => $transData->get(),
        ]);
    }

    public function verify($transID)
    {
        $transaction = Transaction::where('transactionID', $transID)->first();

        $transaction->verified = 1;
        $transaction->save();

        return redirect()->action('MailController@sendInvoice', ['transactionID' => $transID]);
    }

    public function detail($transID)
    {
        return back()->with('id', $transID);
    }
}
