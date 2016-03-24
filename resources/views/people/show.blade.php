@extends('layouts.master')

@section('content')

    <h1>Person</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Name</th><th>Role</th><th>Location</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $person->id }}</td> <td> {{ $person->name }} </td><td> {{ $person->role }} </td><td> {{ $person->location }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection