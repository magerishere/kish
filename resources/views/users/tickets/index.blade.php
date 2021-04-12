@extends('layouts.main')

@section('content')
<a href="{{ route('ticket.create') }}" class="btn btn-primary">Create</a>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Subject</th>
                <th>Ticket</th>
                <th>Sent at</th>
                <th>Answear</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tickets as $ticket)
            <tr>
                <th>{{ $ticket->ticket_id }}</th>
                <th>{{ $ticket->title }}</th>
                <th>{{ $ticket->subject }}</th>
                <th>{{ Str::limit($ticket->body,80) }}</th>
                <th>{{ $ticket->created_at->diffForHumans() }}</th>
                <th>{{ $ticket->answear ? 'answeared' : 'not answeared' }}</th>
                <th>
                    @hasrole('admin')
                        @if ($ticket->answear)
                            <a href="{{ route('ticket.show',$ticket->ticket_id) }}" class="btn btn-primary">
                                View
                            </a>
                        @else
                            <a href="{{ route('ticket.show',$ticket->ticket_id) }}" class="btn btn-success">
                                Answear
                            </a>

                        @endif
                        @if ($ticket->close)
                            <a href="{{ route('ticket.open',$ticket->ticket_id) }}" class="btn btn-secondary">Open</a>
                        @else
                            <a href="{{ route('ticket.close',$ticket->ticket_id) }}" class="btn btn-warning">Close</a>

                        @endif

                    @else
                        <a href="{{ route('ticket.show',$ticket->ticket_id) }}" class="btn btn-primary">
                            View
                        </a>
                    @endhasrole
                    <form action="{{ route('ticket.destroy',$ticket->id) }}" method="POST">
                         @csrf
                         @method("DELETE")
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </th>
            </tr>

            @endforeach
        </tbody>
    </table>
@endsection
