@extends('master.main')

@section('content')

    @component('components.table_users.users', [
                       'users' =>$users,
                   ])
    @endcomponent

@endsection
