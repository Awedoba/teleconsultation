@extends('layout.base',['pagetitle'=>'Edit Teleconsult'])
@section('content')
    <form action="{{route('update')}}" method="post">
        @csrf
        @include('tele.form')
    </form>
@endsection
