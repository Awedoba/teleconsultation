@extends('layout.base')
@section('content')
    <div class="container pb-4">
        <div class="col-12">
            @include('layout.alert')
        </div>
       <div class="row">
           <div class="col-md-6 col-sm-12">
               <a href="{{route('covid.create')}}" class="btn btn-primary">Add Teleconsultation</a>

               <a href="{{route('teleconsult.export')}}" class="btn btn-secondary ml-4">Export</a>
           </div>
           <div class="col-md-6 col-sm-12">
               <form action="{{route('covid.index')}}" method="get" class=" ">
                   @csrf
                   <div class="row">
                       <div class="col-md-6 col-sm-12">
                           <label for="search" class="sr-only">Search</label>
                           <input type="text" id="search" name="search" placeholder="Search" class="form-control" value="{{ request()->search  }}">
                           <p class="text-sm-center text-info small">search using patient first name, name of caller,contact of caller,facility,district</p>
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
                <th scope="col">Name</th>
                <th scope="col">Sex</th>
                <th scope="col">Location</th>
                <th scope="col">Assistance Offered</th>
                {{-- <th scope="col">Name of TCC Staff --}}
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($covids as $key=>$covid)
                <tr>
                    <th scope="row">{{$key}}</th>
                    <td>{{$covid->encounter_date }}</td>
                    <td>{{$covid->name }}</td>
                    <td>{{$covid->sex }}</td>
                    <td>{{$covid->location }}</td>
                    <td>{{$covid->assistance_offered }}</td>
                    {{-- <td>{{$covid->user->name}}</td> --}}
                    <td>
                        <a class="" href="{{route('covid.show',$covid)}}">View</a>
                        <a class="text-info" href="{{route('covid.edit',$covid)}}">Edit</a>
                        @if(auth()->user()->role === "admin")
                        <form action="{{route('teleconsult.destroy',$covid)}}" method="post"
                              onsubmit="return confirm('Are you sure you want to delete this teleconsult?');"
                        > @csrf
                            @method('DELETE')
                        <button class="text-danger btn btn-link"  >Delete</button>
                        </form>
                        @endif
                    </td>
                </tr>
      
            </tbody>
        </table>
        <div class="row">
            {{ $covids->onEachSide(5)->links() }}
        </div>

              @endforeach
    </div>
@endsection