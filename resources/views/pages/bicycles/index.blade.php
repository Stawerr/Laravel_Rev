@extends('master.main')

@section('content')

    @component('components.table_bicycles.bicycles', [
                       'bicycles' =>$bicycles,
                   ])
    @endcomponent

@endsection
