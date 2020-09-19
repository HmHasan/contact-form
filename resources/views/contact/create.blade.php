@extends('layouts.app')
@section('content')
    <form action="{{url('contact')}}" method="POST">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <input type="text" name="name" value="name">
        <button type="submit">Hello World</button>
    </form>
@endsection
