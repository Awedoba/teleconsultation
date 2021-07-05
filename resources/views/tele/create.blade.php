@extends('layout.base',['pagetitle'=>'New Patient'])
@section('content')
    <form action="{{route('store')}}" method="post" class="bg-white p-4">
        @csrf
        @include('tele.form')
    </form>
@endsection
