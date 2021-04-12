<?php
namespace App\Http\Controllers\TicketService;

use App\Models\Ticket;
use Throwable;

class Index {

    public function __invoke()
    {
        try{

            $user = auth()->user();
            if($user->hasRole('admin'))
            {
                $tickets = Ticket::orderByDesc('created_at')->where('to',$user->id)->get();

            } else {
                $tickets = Ticket::orderByDesc('created_at')->where('from',$user->id)->get();
            }
        } catch(Throwable $e) {
            return back()
            ->withError($e->getMessage());
        }
        return view('users.tickets.index',compact('tickets'));
    }
}
