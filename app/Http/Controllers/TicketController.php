<?php

namespace App\Http\Controllers;

use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use App\Ticket;

class TicketController extends Controller
{
    public function index()
    {
        return view('ticket');
    }

    public function store(Request $r)
    {
        $validatedData = $r->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'nim' => 'required|numeric|digits:10',
            'jurusan' => 'required|string|max:100',
            'instansi' => 'required|string|max:100',
            'seminarID' => 'required|string|max:6|min:6',
        ]);

        $ticket = new Ticket;
        $ticket->name = $validatedData['name'];
        $ticket->email = $validatedData['email'];
        $ticket->nim = $validatedData['nim'];
        $ticket->jurusan = $validatedData['jurusan'];
        $ticket->instansi = $validatedData['instansi'];
        $ticket->seminarID = $validatedData['seminarID'];

        $ticket->save();

        Alert::toast('Exit ticket submitted!', 'success');
        return back();
    }
}
