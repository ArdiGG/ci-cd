@extends('layouts.master')

@section('content')
    <form action="{{ route('person.store') }}" method="POST">
        @csrf
        <p>Name: <input type="text" name="name"></p>
        <p>Email: <input type="text" name="email"></p>
        <p>Phone: <input type="text" name="phone"></p>
        <p><button type="submit">Send</button></p>
    </form>
@endsection
