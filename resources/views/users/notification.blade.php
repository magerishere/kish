@extends('layouts.main')


@section('content')
    <table class="table table-hover">
        <thead>
            <tr>
                <td>Subject</td>
                <td>Values</td>
                <td>Message</td>
                <td>Sent at</td>

            </tr>
        </thead>
        <tbody>
            @foreach ($notifications as $notification)
                <tr>
                    <td>{{ json_decode($notification->data)->subject }}</td>
                    <td>
                        @foreach (json_decode($notification->data)->values as $value)
                            {{ $value }},
                        @endforeach
                    </td>
                    <td>{{ json_decode($notification->data)->message }}</td>
                    <td>{{ $notification->created_at}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
