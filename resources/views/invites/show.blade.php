@extends('layouts.master')

@section('content')

    <h1>Invite</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Name</th><th>Email</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $invite->id }}</td> <td> {{ $invite->name }} </td><td> {{ $invite->email }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection