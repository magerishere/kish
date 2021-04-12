@extends('layouts.main')


@section('content')
<form action="{{ route('ticket.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="ticket_id" value="{{ Str::random() }}">
    <input type="hidden" name="from" value="{{ auth()->user()->id }}">
    <input type="hidden" name="to" value="1">
    <div class="mb-3">
      <label for="exampleFormControlInput1">Title</label>
      <input type="text" name="title" class="form-control" id="exampleFormControlInput1" required placeholder="please write short title...">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlSelect1">Subject</label>
      <select class="form-select" name="subject" id="exampleFormControlSelect1">
        <option value="Technical">Technical</option>
        <option value="insult">insult</option>
        <option value="other">other</option>
      </select>
    </div>
    <div class="mb-3">
      <label for="exampleFormControlTextarea1">Your ticket</label>
      <textarea class="form-control" name="body" id="exampleFormControlTextarea1" rows="3" required placeholder="please write about your problem in full"></textarea>
    </div>
    <div class="mb-3">
        <input type="file" class="form-control" name="attach">
    </div>
    <button type="submit" class="btn btn-primary">Send</button>
  </form>
@endsection
