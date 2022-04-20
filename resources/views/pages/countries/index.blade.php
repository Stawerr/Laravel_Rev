@extends('master.main')

@section('content')

    @component('components.table_countries.countries', [
                       'countries' =>$countries,
                   ])
    @endcomponent

@endsection
