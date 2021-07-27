@extends('layout.base')
@section('content')
    <div class="row text-center p-2">
        <div class="col text-center">
           <h1>COVID Teleconsultation </h1>
        </div>
    </div>
    <div class="container pb-4">
        <div class="col-12">
            @include('layout.alert')
        </div>
       <div class="row">
           <div class="col-md-6 col-sm-12">
               <a href="{{route('covid.create')}}" class="btn btn-primary">Add Covid Teleconsultation</a>

               <a href="{{route('covid.export')}}" class="btn btn-secondary ml-4">Export</a>
           </div>
           <div class="col-md-6 col-sm-12">
               <form action="{{route('covid.index')}}" method="get" class=" ">
                   @csrf
                   <div class="row">
                       <div class="col-md-6 col-sm-12">
                           <label for="search" class="sr-only">Search</label>
                           <input type="text" id="search" name="search" placeholder="Search" class="form-control" value="{{ request()->search  }}">
                           <p class="text-sm-center text-info small">search using name, location,contact of caller,</p>
                       </div>
                       <div class="col-md-6 col-sm-12">
                           <button type="submit" class="btn btn-primary">Search</button>
                       </div>
                   </div>
               </form>
           </div>
           <div class="col-12">
               <div class="row">
                   <div class="col-md- col-sm-12">
                       <form action="{{route('covid.exportRange')}}" method="get" class=" ">
                           @csrf
                           <div class="row">
                               <div class="col-md-4 col-sm-12">
                                   <label for="from_date" class="">From date</label>
                                   <input type="date" required id="from_date" name="from_date" placeholder="from_date" class="form-control" value="{{ request()->from_date  }}">
                               </div>
                               <div class="col-md-4 col-sm-12">
                                   <label for="to_date" class="">To Date</label>
                                   <input type="date" id="to_date" name="to_date" placeholder="to_date" class="form-control" value="{{ request()->to_date  }}">
                                   {{--                        <p class="text-sm-center text-info small">search using patient first name, name of caller,contact of caller,facility,district</p>--}}
                               </div>
                               <div class="col-md-4 col-sm-12 mt-4">
                                   <button type="submit" class="btn btn-primary">Export</button>
                               </div>
                           </div>
                       </form>
                   </div>
               </div>
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
                    <th scope="row">{{$key + 1}}</th>
                    <td>{{$covid->encounterDate() }}</td>
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
            @endforeach
            </tbody>
        </table>
        <div class="row">
            {{ $covids->onEachSide(5)->links() }}
        </div>
    </div>
@endsection
