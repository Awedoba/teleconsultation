@extends('layout.base',['pagetitle'=>'Change Password'])
@section('content')
    <div class="row">
        @include('layout.alert')
    </div>
    <div class="container">

        <form action="{{route('user.update',$user)}}" method="POST" >
            {{-- @method('put') --}}
            @csrf

            <div class="row">
                <p></p>
                <div class="col-2"></div>
                <div class="col-8">
                    <div class="col m-4">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="name" value="{{$user->name}}" >
                        @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col m-4">
                        <label for="user_name">Username</label>
                        <input type="text" class="form-control" id="user_name" name="user_name" placeholder="Username" value="{{$user->user_name}}" >
                        @error('user_name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col m-4">
                        <label for="role" class="text-black-700" >Choose a role</label>
                        <select required class="custom-select d-block w-100" id="role" name="role"  >
                            <option value="" selected disabled>Choose...</option>
                            <option value="user" {{$user->role == 'user'? 'selected' :''}}>user</option>
                            <option value="admin" {{$user->role == 'admin'? 'selected' :''}}>admin</option>
                        </select>
                        @error('role')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col m-4">
                        <button type="submit" class="btn btn-primary ">Update</button>
                    </div>
                </div>
                <div class="col-2"></div>
            </div>

        </form>
    </div>

@endsection
