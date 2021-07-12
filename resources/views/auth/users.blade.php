@extends('layout.base')
@section('content')


    <div class="container">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col"> Name</th>
                <th scope="col">User Name</th>
                <th scope="col">Role</th>
                <th scope="col">Created at</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $key=>$user)
                <tr>
                    <th scope="row">{{$key}}</th>
                    <td>{{$user->name }}</td>
                    <td>{{$user->user_name }}</td>
                    <td>{{$user->role }}</td>
                    <td>{{$user->created_at }}</td>
                    <td>
                        <a class="" href="{{route('password.reset',$user)}}">Reset password</a>
{{--                        <a class="text-info" href="{{route('teleconsult.edit',$user)}}">Edit</a>--}}
                        <a class="" href="{{route('user.edit',$user)}}">Edit account</a> 
                        <form action="{{ route('users.delete',$user)}}" method="post"
                              onsubmit="return confirm('Are you sure you want to delete this user?');">
                            @method('DELETE')
                            @csrf
                            <button class="text-danger btn btn-light" type="submit" style="background: none;
                                color: inherit;
                                border: none;
                                padding: 0;
                                margin: 0;
                                font: inherit;
                                cursor: pointer;
                                outline: inherit;">Delete</button>       
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
