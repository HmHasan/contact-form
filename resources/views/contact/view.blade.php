@extends('layouts.app')
@section('content')
    <div class="text-center"> User Information </div>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>SL</th>
                <th>Name</th>
                <th>Email</th>
                <th>Institute</th>
                <th>Occupation</th>
                <th>Education</th>
                <th>Phone</th>
                <th>Division</th>
                <th>District</th>
                <th>Facebook</th>
                <th>Profile Create at</th>
            </tr>
        </thead>
        <tbody>
            @if (count($user)>0)
                @php($i=1)
                @foreach($user as $users)
                    <tr>
                        <td>{{$i++}}</td>
                    <td>{{$users->name}}</td>
                    <td>{{$users->email}}</td>
                    <td>{{$users->institute}}</td>
                    <td>{{$users->occupation}}</td>
                    <td>{{$users->education}}</td>
                    <td>{{$users->phone}}</td>
                    <td>{{$users->division}}</td>
                    <td>{{$users->district}}</td>
                    <td><a href="{{$users->fb_id}}">{{$users->fb_id}}</a></td>
                    <td>{{$users->created_at->format(date('d-m-y'))}}</td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
@endsection

