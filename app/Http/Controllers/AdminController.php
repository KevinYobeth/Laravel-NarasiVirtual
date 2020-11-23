<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Motd;
use App\Transaction;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class AdminController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        if ($user->role == 0)  return back();

        $hanas = DB::table('transactions')
            ->leftJoin('seminars', 'seminars.transactionID', '=', 'transactions.transactionID')
            ->join('users', 'users.id', '=', 'seminars.userID')
            ->where('seminarID', 1)->get();

        $amandas = DB::table('transactions')
            ->leftJoin('seminars', 'seminars.transactionID', '=', 'transactions.transactionID')
            ->join('users', 'users.id', '=', 'seminars.userID')
            ->where('seminarID', 2)->get();

        if (session('id')) {
            $transID = session('id');

            $detailData = DB::table('transactions')
                ->leftJoin('seminars', 'seminars.transactionID', '=', 'transactions.transactionID')
                ->join('users', 'users.id', '=', 'seminars.userID')
                ->where('transactions.transactionID', $transID)->first();

            Alert::image('Nama: ' . $detailData->name, 'Nama Rek: ' . $detailData->namaRekening, url($detailData->filePath), 'Image Width', 'Image Height');
        }

        $motds = Motd::all();

        return view('admin', [
            'hanas' => $hanas,
            'amandas' => $amandas,
            'motds' => $motds,
        ]);
    }

    public function motd(Request $r)
    {
        $landMotd = Motd::findOrFail(1);
        $liveMotd = Motd::findOrFail(2);

        $landMotd->message = $r->landMessage;
        $landMotd->link = $r->landLink;

        $liveMotd->message = $r->liveMessage;
        $liveMotd->link = $r->liveLink;

        $landMotd->save();
        $liveMotd->save();

        Alert::toast('MOTD\'s updated!', 'success');
        return back();
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
