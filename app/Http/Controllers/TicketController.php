<?php

namespace App\Http\Controllers;

use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use App\Ticket;

class TicketController extends Controller
{
    public function index($seminarCode)
    {

        $seminar = array(
            'EXPYSL', 'MTHAWR', 'SLFPRT', 'SLFLVE', 'VTLPHS',
            'BTYPRT', 'CPTEMT', 'VRTEXH', 'ARTOBW', 'FLMPHT', 'INSPBN'
        );

        if (in_array(strtoupper($seminarCode), $seminar)) {
            return view('ticket', ['seminarCode' => $seminarCode]);
        } else {
            abort(404);
        }

        return view('ticket', ['seminarCode' => $seminarCode]);
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
