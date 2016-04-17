@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Welcome</div>

                    <div class="panel-body">
                        <ul class="list-group">
                            <li class="list-group-item"><a href="{{route('invites.index')}}">Convites</a></li>
                            <li class="list-group-item"><a href="{{route('people.index')}}">Padrinhos / Madrinhas</a></li>
                            <li class="list-group-item"><a href="{{route('users.index')}}">Usuários</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
