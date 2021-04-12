<?php
namespace App\Http\Controllers\TicketService;

use Throwable;

class Destroy {

    public function __invoke($ticket)
    {
        try {
            foreach($ticket->child as $child)
            {
                $child->delete();
            }
            $ticket->delete();
            return back()
                ->withSuccess('ticket has been deleted');

        } catch(Throwable $e) {
            return back()
                ->withError($e->getMessage());
        }
    }
}
