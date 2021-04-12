<?php
namespace App\Http\Controllers\TicketService;

use App\Models\Ticket;
use Throwable;

class CloseTicket {

    public function __invoke($ticket_id)
    {
        try{
            $ticket = Ticket::where('ticket_id',$ticket_id)->first();
            $ticket->update([
                'close' => 1,
            ]);

        } catch(Throwable $e) {
            return back()
            ->withError($e->getMessage());
        }
        return back()
            ->withSuccess('ticket has been closed');
    }
}
