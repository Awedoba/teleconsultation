@extends('layout.base',['pagetitle'=>'Register'])
@section('content')
    <div class="row">
        @include('layout.alert')
    </div>
    <div class="row">
        <div class="col-2"></div>
        <div class="col-md-8 col-sm-12">
            <form action="{{route('register')}}" method="post" class="bg-white p-4">
                @csrf
                <div class="col-md-12 col-sm-12">
                    <div class="col m-4">
                        <label for="fullname">Fullname</label>
                        <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Fullname" >
                        @error('fullname')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col m-4">
                        <label for="user_name">User Name</label>
                        <input type="text" class="form-control" id="user_name" name="user_name" placeholder="User Name" >
                        @error('user_name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col m-4">
                        <label for="password">Password</label>
                        <input type="password" minlength="6" class="form-control" id="password" name="password" placeholder="Password" >
                        @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col m-4">
                        <label for="role" class="text-black-700" >Choose a role</label>
                        <select required class="custom-select d-block w-100" id="role" name="role"  >
                            <option value="" selected disabled>Choose...</option>
                            <option value="user">user</option>
                            <option value="admin">admin</option>
                        </select>
                        @error('role')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col m-4">
                        <button type="submit" class="btn btn-primary ">Register User</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
