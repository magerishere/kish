<?php
namespace App\Http\Controllers\TicketService;

use App\Models\Ticket;
use Throwable;

class Show {

    public function __invoke($ticket_id)
    {
        try{

            $ticket = Ticket::where('ticket_id',$ticket_id)->first();
        } catch(Throwable $e) {
            return back()
            ->withError($e->getMessage());
        }
        return view('users.tickets.show',compact('ticket'));
    }
}
