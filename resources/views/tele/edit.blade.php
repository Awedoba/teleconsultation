@extends('layout.base',['pagetitle'=>'New Patient'])
@section('content')
    <form action="{{route('update')}}" method="post">
        @csrf
        @include('tele.form')
    </form>
@endsection
