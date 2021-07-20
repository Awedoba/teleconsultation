@extends('layout.base',['pagetitle'=>'Edit COVID Consultation'])
@section('content')
    <div class="row">
        @include('layout.alert')
    </div>
    <form action="{{route('teleconsult.update',$covid)}}" method="post">
        @method('put')
        @csrf
        @include('covid.form')
    </form>
@endsection
