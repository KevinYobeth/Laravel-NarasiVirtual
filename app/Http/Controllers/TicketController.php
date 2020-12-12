<?php

namespace App\Http\Controllers;

use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use App\Ticket;
use App\Status;

class TicketController extends Controller
{
    public function index($seminarCode)
    {
        $seminarExit = Status::where('slug', strtoupper($seminarCode))->firstOrFail();

        if ($seminarExit->status) {
            return view('ticket', ['seminarCode' => $seminarCode, 'eventName' => $seminarExit->eventName]);
        } else {
            return view('notAccepting');
        }
    }

    public function store(Request $r, $seminarCode)
    {
        $validatedData = $r->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'nim' => 'required|numeric|digits:10',
            'jurusan' => 'required|string|max:100',
            'instansi' => 'required|string|max:100',
        ]);

        if (Ticket::where('name', $validatedData['name'])->where('seminarID', strtoupper($seminarCode))->exists()) {
            Alert::toast('You already submitted a ticket!', 'error');
            return back();
        }

        $ticket = new Ticket;
        $ticket->name = $validatedData['name'];
        $ticket->email = $validatedData['email'];
        $ticket->nim = $validatedData['nim'];
        $ticket->jurusan = $validatedData['jurusan'];
        $ticket->instansi = $validatedData['instansi'];
        $ticket->seminarID = strtoupper($seminarCode);

        $ticket->save();

        Alert::toast('Exit ticket submitted!', 'success');
        return back();
    }
}
