<?php

namespace App\Http\Controllers;

use URL;
use App\User;
use App\Transaction;
use App\Seminar;

use App\Mail\InvoiceMail;
use App\Mail\ConfirmationMail;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendInvoice($transactionID)
    {
        // https://blog.mailtrap.io/send-email-in-laravel/
        $user = Auth::user();

        $invoiceURL = URL::to('/') . "/invoice/" . $transactionID;

        $data = [
            'date' => date("d-m-yy"),
            'name' => $user->name,
            'invoiceNum' => $transactionID,
            'invoiceURL' => $invoiceURL
        ];

        Mail::to($user->email)->send(new InvoiceMail($data));

        return view('dash');
    }

    public function sendConfirmation($transactionID)
    {
        $user = Auth::user();
        $invoiceURL = URL::to('/') . "/invoice/" . $transactionID;

        $data = [
            'date' => date("d-m-yy"),
            'name' => $user->name,
            'invoiceNum' => $transactionID,
            'invoiceURL' => $invoiceURL
        ];

        Mail::to($user->email)->send(new ConfirmationMail($data));

        return redirect('dash')->with('status', 'We will verify your payment as soon as possible!');
    }

    public function viewInvoice($invoiceID)
    {

        $details = Transaction::where('transactionID', $invoiceID)->firstOrFail();
        $userID = Seminar::select('userID')->where('transactionID', $invoiceID)->value('userID');
        $user = User::find($userID);

        return view('mails.invoice-web', [
            'details' => $details,
            'invoiceID' => $invoiceID,
            'name' => $user->name,
        ]);
    }
}
