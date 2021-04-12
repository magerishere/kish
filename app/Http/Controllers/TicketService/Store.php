<?php
namespace App\Http\Controllers\TicketService;

use App\Models\AttachTicket;
use App\Models\Ticket;
use Throwable;

class Store {

    public function __invoke($request)
    {
        try {
            Ticket::create($request->except('attach'));
            if($file = $request->file('attach'))
            {
                $file->store('public/images');
                AttachTicket::create([
                    'ticket_id' => $request->ticket_id,
                    'url' => $file->hashName(),
                ]);
            }
        } catch(Throwable $e) {
            return back()
                ->withError($e->getMessage());
        }
        return back()
            ->withSuccess('Your ticket has been sent');
    }
}
