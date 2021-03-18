<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Register</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    </head>
    <body>

        <section style="padding-top: 60px">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">

                        <h4>Register | Custom Auth</h4><hr>
                        <form action="{{ route('auth.save') }}" method="post">

                            @if(Session::get('success'))
                                <div class="alert alert-success">
                                    {{ Session::get('success') }}
                                </div>
                            @endif

                                @if(Session::get('fail'))
                                    <div class="alert alert-danger">
                                        {{ Session::get('fail') }}
                                    </div>
                            @endif


                            @csrf

                            <div class="form-group">
                                <label><strong>Name</strong></label>
                                <input type="text" class="form-control" name="name" placeholder="Enter Full name" value="{{ old('name') }}">
                                <span class="text-danger">@error('name'){{ $message }} @enderror</span>
                            </div>

                            <div class="form-group">
                                <label><strong>Email address</strong></label>
                                <input type="email" class="form-control" name="email" placeholder="Enter Email Address" value="{{ old('email') }}">
                                <span class="text-danger">@error('email'){{ $message }} @enderror</span>
                            </div>

                            <div class="form-group">
                                <label><strong>Password</strong></label>
                                <input type="password" class="form-control" name="password" placeholder="Enter Password" >
                                <span class="text-danger">@error('password'){{ $message }} @enderror</span>
                            </div>

                            <button type="submit" class="btn btn-block btn-primary">Sign Up</button>
                            <br>
                            <a href="{{ route('auth.login') }}">I already have an account, sign in</a>
                        </form>

                    </div>
                </div>
            </div>
        </section>

    </body>
</html>
