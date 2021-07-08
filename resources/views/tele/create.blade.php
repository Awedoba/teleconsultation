@extends('layout.base',['pagetitle'=>'Add Teleconsult'])
@section('content')
    <div class="row">
        @include('layout.alert')
    </div>
    <form action="{{route('teleconsult.store')}}" method="post" class="bg-white p-4">
        @csrf
        @include('tele.form')
    </form>
@endsection

