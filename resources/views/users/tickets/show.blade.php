@extends('layouts.main')


@section('content')
@if ($ticket->attach)
    <label for="">Attach file</label>
    <br>
    <img width="300" src="{{ $ticket->attach->url }}" alt="Attach ticket">

@endif
    <div class="row">
        <h3>Subject: {{ $ticket->subject }} </h3>
        <h5>Title: {{ $ticket->title }}</h5>
        <div class="col-md-10">
            <textarea cols="30" rows="10" class="form-control" disabled>{{ $ticket->body }}</textarea>
            @foreach ($ticket->child as $child)
                <textarea  cols="30" rows="10" disabled class="form-control">{{ $child->body }}</textarea>
            @endforeach
            <hr>
            <form action="{{ route('ticket.child') }}" method="POST">
                @csrf
                <input type="hidden" name="ticket_id" value="{{ $ticket->ticket_id }}">
                <input type="hidden" name="from" value="{{ auth()->user()->id }}">
                @hasrole('admin')
                    <input type="hidden" name="to" value="{{ $ticket->from }}">
                @else
                    <input type="hidden" name="to" value="{{ $ticket->to }}">
                @endhasrole
                @hasrole('admin')
                    <input type="hidden" name="answear" value="1">
                @else
                    <input type="hidden" name="answear" value="0">
                @endhasrole
                @if ($ticket->close)
                    <h4 class="text-danger">Ticket has been closed!</h4>
                @else
                    <label for="">Your ticket</label>
                    <div class="mb-3">
                    <textarea name="body" cols="30" rows="10" required class="form-control" placeholder="Write your another ticket.."></textarea>

                    </div>
                    <button type="submit" class="btn btn-primary">Send</button>
                @endif
            </form>
        </div>
    </div>
@endsection
