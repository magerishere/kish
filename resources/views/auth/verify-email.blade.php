@extends('layouts.main')


@section('content')
    <h2>verify Email</h2>
    <form action="{{ route('verification.send') }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-primary">Resend verification email</button>
    </form>
@endsection
