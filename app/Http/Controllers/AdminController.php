<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Transaction;

class AdminController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        if ($user->role == 0)  return back();

        $transData = DB::table('transactions')
            ->leftJoin('seminars', 'seminars.transactionID', '=', 'transactions.transactionID')
            ->join('users', 'users.id', '=', 'seminars.userID')->get();

        // return $transData;

        return view('admin', [
            'transactions' => $transData,
        ]);
    }

    public function verify($transID)
    {
        $transaction = Transaction::where('transactionID', $transID)->first();

        $transaction->verified = 1;
        $transaction->save();

        return back();
    }
}
