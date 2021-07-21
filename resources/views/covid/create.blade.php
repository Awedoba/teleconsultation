@extends('layout.base',['pagetitle'=>'Add Covid Consultation'])
@section('content')
    <div class="row">
        @include('layout.alert')
    </div>
    <form action="{{route('covid.store')}}" method="post" class="bg-white p-4">
        @csrf
        @include('covid.form')
    </form>
@endsection

