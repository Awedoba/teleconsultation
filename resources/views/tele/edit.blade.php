@extends('layout.base',['pagetitle'=>'Edit Teleconsult'])
@section('content')
    <div class="row">
        @include('layout.alert')
    </div>
    <form action="{{route('teleconsult.update',$teleconsult)}}" method="post">
        @method('put')
        @csrf
        @include('tele.form')
    </form>
@endsection
