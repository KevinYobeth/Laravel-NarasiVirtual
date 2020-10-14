<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\InvoiceMail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendInvoice()
    {
        // https://blog.mailtrap.io/send-email-in-laravel/
        $data = [
            'date' => date("d-m-yy"),
            'name' => 'Kevin Yobeth',
            'invoiceNum' => 'XSKER',
            'invoiceURL' => 'https://narasi.kevinyobeth.com/invoice/xsker',
        ];

        Mail::to('newuser@eample.com')->send(new InvoiceMail($data));

        return 'A message has been sent to Mailtrap!';
    }
}
