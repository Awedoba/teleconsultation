@extends('layout.base',['pagetitle'=>'Add Teleconsult'])
@section('content')
    <form action="{{route('store')}}" method="post" class="bg-white p-4">
        @csrf
        @include('tele.form')
    </form>
@endsection

