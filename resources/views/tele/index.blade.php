@extends('layout.base')
@section('content')
    <div class="container pb-4">
        <div class="col-12">
            @include('layout.alert')
        </div>
       <div class="row">
           <div class="col-md-6 col-sm-12">
               <a href="{{route('teleconsult.create')}}" class="btn btn-primary">Add Teleconsultation</a>

               <a href="{{route('teleconsult.export')}}" class="btn btn-secondary ml-4">Export</a>
           </div>
           <div class="col-md-6 col-sm-12">
               <form action="{{route('teleconsult.index')}}" method="get" class=" ">
                   @csrf
                   <div class="row">
                       <div class="col-md-6 col-sm-12">
                           <label for="search" class="sr-only">Search</label>
                           <input type="text" id="search" name="search" placeholder="Search" class="form-control" value="{{ request()->search  }}">
                           <p class="text-sm-center text-info small">search using patient first name, name of caller and contact of caller</p>
                       </div>
                       <div class="col-md-6 col-sm-12">
                           <button type="submit" class="btn btn-primary">Search</button>
                       </div>
                   </div>
               </form>
           </div>
       </div>
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
                <th scope="col">Name of TCC Staff
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($teleconsults as $key=>$teleconsult)
                <tr>
                    <th scope="row">{{$key}}</th>
                    <td>{{$teleconsult->encounter_date }}</td>
                    <td>{{$teleconsult->facility }}</td>
                    <td>{{$teleconsult->district }}</td>
                    <td>{{$teleconsult->patient_first_name }}</td>
                    <td>{{$teleconsult->name_of_caller }}</td>
                    <td>{{$teleconsult->user->name}}</td>
                    <td>
                        <a class="" href="{{route('teleconsult.show',$teleconsult)}}">View</a>
                        <a class="text-info" href="{{route('teleconsult.edit',$teleconsult)}}">Edit</a>
                        <form action="{{route('teleconsult.destroy',$teleconsult)}}" method="post"
                              onsubmit="return confirm('Are you sure you want to delete this teleconsult?');"
                        > @csrf
                            @method('DELETE')
                        <button class="text-danger btn btn-link"  href="{{route('teleconsult.edit',$teleconsult)}}">Delete</button>
                        </form>
                    </td>
                </tr>
           @endforeach
            </tbody>
        </table>
        <div class="row">
            {{ $teleconsults->onEachSide(5)->links() }}
        </div>
    </div>
@endsection
