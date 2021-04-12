<?php
namespace App\Http\Controllers\TicketService;

use App\Models\ChildTicket;
use App\Models\Ticket;
use App\Models\User;
use App\Notifications\UserNotification;
use Throwable;

class ChildTicketHandler {

    public function __invoke($request)
    {
        try {
            ChildTicket::create($request->except('answear'));
                $ticket = Ticket::where('ticket_id',$request->ticket_id)->first();
                $ticket->update([
                    'answear' => $request->answear,
                ]);
            //if admin answear ticket send notification to user
            if(auth()->user()->hasRole('admin'))
            {
                $user = User::where('id',$request->to)->first();
                $values = [$ticket->subject,$ticket->title];
                $subject = 'User Notification';
                $message = 'your ticket answeared by ' . $user->email;
                $user->notify(new UserNotification($subject,$values,$message));

            }
            return back()
                ->withSuccess('Your ticket has been sent');

        } catch(Throwable $e) {
            return back()
                ->withError($e->getMessage());
        }
    }
}
