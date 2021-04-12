<?php

namespace App\Http\Controllers;

use App\Http\Controllers\TicketService\ChildTicketHandler;
use App\Http\Controllers\TicketService\CloseTicket;
use App\Http\Controllers\TicketService\Destroy;
use App\Http\Controllers\TicketService\Index;
use App\Http\Controllers\TicketService\OpenTicket;
use App\Http\Controllers\TicketService\Show;
use App\Http\Controllers\TicketService\Store;
use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return app(Index::class)($this);
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
        return app(Store::class)($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function show($ticket_id)
    {
        return app(Show::class)($ticket_id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function edit(Ticket $ticket)
    {
        //
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
        return app(Destroy::class)($ticket);
    }

    public function closeTicket($ticket_id)
    {
        return app(CloseTicket::class)($ticket_id);
    }

    public function openTicket($ticket_id)
    {
        return app(OpenTicket::class)($ticket_id);
    }

    public function childTicket(Request $request)
    {
        return app(ChildTicketHandler::class)($request);
    }
}
