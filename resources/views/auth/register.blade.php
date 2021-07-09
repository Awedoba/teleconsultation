@extends('layout.base',['pagetitle'=>'Change Password'])
@section('content')<br>
    <br>@include('layout.alert')
    <body>
        <form action="{{route('register')}}" method="post" >
            @csrf
            <div class="row">
                <p></p>
                <div class="col-2"></div>
                <div class="col-8">
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
                        <label for="user_name">Username</label>
                        <input type="text" class="form-control" id="user_name" name="user_name" placeholder="Username" >
                        @error('user_name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col m-4">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" >
                        @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-4 bg-gray-100 border-2 w-full p-4 flex justify-between">
                <label for="roles" class="text-black-700" >Choose a role</label>
                    <select required name="roles" id="roles" class="text-blueGray-300 ">
                        <option value="" selected disabled>Choose...</option>
                        <option value="User" class="text-blueGray-300">User</option>
                        <option value="Admin" class="text-blueGray-300">Admin</option>
                    </select>
                @error('roles')
                <p class="invalid-feedback">{{ $message }}</p>
                @enderror
            </div>
                    <div class="col m-4">
                        <button type="submit" class="btn btn-primary ">Register User</button>
                    </div>
                </div>
                <div class="col-2"></div>
            </div>

        </form>
    </body>