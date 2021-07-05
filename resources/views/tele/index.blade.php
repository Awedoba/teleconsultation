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
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection
