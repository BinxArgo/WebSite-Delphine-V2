<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('bootstrap-3.1.1/css/bootstrap.min.css') }}">
</head>

<body>
    <div class="container">
        <div class="row" style="margin-top:45px">
            <div class="col-md-4 col-md-offset-4">
                <h4>Register | Custom Auth</h4>
                <hr>
                <form action="{{ route('auth.save') }}" method="post">
                @if(Session::get('sucesss'))
                <div class="alert alert-sucess">
                     {{ Session::get('success')}}
                </div>
                @endif

                @if(Session::get('fail'))
                <div class="alert alert-danger">
                     {{ Session::get('fail')}}
                </div>
                @endif

                @csrf
                <div class="form-group">
                        <label for="">Name</label><br>
                        <input type="text" class="form-control" name="name" placeholder="Enter full name" value="{{ old('name')}}">
                        <span class="text-danger">@error('name'){{ $message }} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="">Email</label><br>
                        <input type="text" class="form-control" name="email" placeholder="Enter email address" value="{{ old('email') }}">
                        <span class="text-danger">@error('email'){{ $message }} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Enter Password">
                        <span class="text-danger">@error('password'){{ $message }} @enderror</span>
                    </div>
                    <button type="submit" class="btn btn-block btn-primary">Sign In</button>
                    <br>
                    <a href="{{ route('auth.login') }}">I already have an account, sign in</a>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
