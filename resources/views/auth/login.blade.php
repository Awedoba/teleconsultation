
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Teleconsult</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-light">
<div id="root" class="container pt-lg-5 mt-lg-5">
    @include('layout.alert')
        <form action="{{route('login')}}" method="post" >
            @csrf
            <div class="row">
                <div class="col-2"></div>
                <div class="col-8">
                    <div class="col m-4">
                        <img class="mx-auto d-block" src="{{ URL::to('/images/ghslogo.jpg') }}">
                        <label for="user_name">Username</label>
                        <input type="text" class="form-control" id="user_name" name="user_name" placeholder=""  >
                        @error('user_name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col m-4">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="" >
                        @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col m-4">
                        <button type="submit" class="btn btn-primary ">Login</button>
                    </div>
                </div>
                <div class="col-2"></div>
            </div>

        </form>
    </div>

</body>
</html>
