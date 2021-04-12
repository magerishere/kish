<?php

namespace App\Http\Controllers;

use App\Models\AttachTicket;
use App\Models\ChildTicket;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Throwable;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user();
        if($user->hasRole('admin'))
        {
            $tickets = Ticket::orderByDesc('created_at')->where('to',$user->id)->get();

        } else {
            $tickets = Ticket::orderByDesc('created_at')->where('from',$user->id)->get();
        }
        return view('users.tickets.index',compact('tickets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.tickets.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function show($ticket_id)
    {
        $ticket = Ticket::where('ticket_id',$ticket_id)->first();
        return view('users.tickets.show',compact('ticket'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function edit(Ticket $ticket)
    {
        return 'edited';
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ticket $ticket)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ticket $ticket)
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

    public function closeTicket($ticket_id)
    {
        $ticket = Ticket::where('ticket_id',$ticket_id)->first();
        $ticket->update([
            'close' => 1,
        ]);
        return back()
            ->withSuccess('ticket has been closed');
    }

    public function openTicket($ticket_id)
    {
        $ticket = Ticket::where('ticket_id',$ticket_id)->first();
        $ticket->update([
            'close' => 0,
        ]);
        return back()
            ->withSuccess('ticket has been opened');
    }

    public function childTicket(Request $request)
    {
        try {
            ChildTicket::create($request->except('answear'));
                $ticket = Ticket::where('ticket_id',$request->ticket_id)->first();
                $ticket->update([
                    'answear' => $request->answear,
                ]);

            return back()
                ->withSuccess('Your ticket has been sent');

        } catch(Throwable $e) {
            return back()
                ->withError($e->getMessage());
        }
    }
}
