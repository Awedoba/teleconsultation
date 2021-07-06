@extends('layout.base')
@section('content')

    <div class="container pb-4">
        <div class="col-6">
            <a href="{{route('create')}}" class="btn btn-primary">Add Teleconsultation</a>
        </div>
        <div class="col-6"></div>
    </div>
    <div class="container">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Encounter Date</th>
                <th scope="col">Facility</th>
                <th scope="col">District</th>
                <th scope="col">Patient name</th>
                <th scope="col">Name of caller</th>
                <th scope="col">Name of TCC Staff</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">1</th>
                <td>10/17/2021</td>
                <td>blah</td>
                <td>ga-east</td>
                <td>Mark</td>
                <td>paul caller</td>
                <td>Alex staff</td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection
