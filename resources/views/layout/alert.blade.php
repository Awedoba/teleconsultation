@if ($message = Session::get('success'))
    <div class="col-12 alert alert-success" role="alert">
        {{ $message }}
    </div>
@endif

@if ($message = Session::get('error'))
    <div class="col-12 alert alert-danger" role="alert">
        {{ $message }}
    </div>
@endif

@if ($message = Session::get('warning'))
    <div class="col-12 alert alert-warning" role="alert">
        {{ $message }}
    </div>
@endif

@if ($message = Session::get('info'))
    <div class="col-12 alert alert-info" role="alert">
        {{ $message }}
    </div>
@endif

@if ($errors->any())
    <div class="col-12 alert alert-primary" role="alert">
        {{ $message }}
    </div>
@endif
