@extends('layout.base',['pagetitle'=>'Change Password'])
@section('content')<br>
    <br>@include('layout.alert')
    <body>
        <form action="{{route('password.change')}}" method="post" >
            @csrf
            <div class="row">
                <p></p>
                <div class="col-2"></div>
                <div class="col-8">
                    <div class="col m-4">
                        <label for="old_password">Old Password</label>
                        <input type="text" class="form-control" id="old_password" name="old_password" placeholder="Old Password" >
                        @error('old_password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col m-4">
                        <label for="password">New Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="New Password" >
                        @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col m-4">
                        <label for="password">Confirm Password</label>
                        <input type="password" class="form-control" id="password" id="password_confirmation" name="password_confirmation" placeholder="Repeat Password" >
                        @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col m-4">
                        <button type="submit" class="btn btn-primary ">Change Password</button>
                    </div>
                </div>
                <div class="col-2"></div>
            </div>

        </form>
    </body>
   