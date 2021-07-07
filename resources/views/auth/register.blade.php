@extends('layouts.app',['pagetitle'=>'Create User'])
@section('content')
<div class="flex justify-center ">
    <div class="w-4/12 bg-white p-6 mt-12">
    @include('layouts.alert')
        <form action="{{route('register')}}" method="post">
            @csrf
            <div class="mb-4">
                <label for="fullname" class="sr-only">Full name</label>
                <input type="text" id="fullname" name="fullname" placeholder="Full Name" class=" bg-gray-100 border-2 w-full p-4" value="{{ old('password') }}">
                @error('fullname')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="user_name" class="sr-only">Username</label>
                <input type="text" id="user_name" name="user_name" placeholder="Username" class=" bg-gray-100 border-2 w-full p-4" value="{{ old('password') }}">
                @error('user_name')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="password" class="sr-only">Password</label>
                <input type="password" id="password" name="password" placeholder="Password" class=" bg-gray-100 border-2 w-full p-4" value="{{ old('password') }}">
                @error('password')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4 bg-gray-100 border-2 w-full p-4 flex justify-between">
                <label for="roles" class="text-black-700" >Choose a role</label>
                    <select name="roles" id="roles" class="text-blueGray-300 ">
                        <option value="Nurse" class="text-blueGray-300">Nurse</option>
                        <option value="Doctor" class="text-blueGray-300">Doctor</option>
                        <option value="Admin" class="text-blueGray-300">Admin</option>
                    </select>
                @error('roles')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit" class="bg-green-500 text-white px-4 py-3 font-medium w-full">
                Create User
            </button>
        </form>
    </div>

</div>
@endsection
