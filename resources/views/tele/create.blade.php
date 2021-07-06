@extends('layout.base',['pagetitle'=>'New Patient'])
@section('content')
    <form action="{{route('store')}}" method="post">
        @csrf
        @include('tele.form')
    </form>
@endsection

