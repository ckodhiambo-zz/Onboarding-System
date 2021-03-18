<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List of Employees</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">


</head>
<body>

<section style="padding-top: 60px">

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong>LIST OF ALL EMPLOYEES</strong>
                        <br>
                        <br>
                        <a href="/add-post" class="btn btn-success">Add a New Employee</a>
                    </div>
                    <div class="card-body">
                        @if(Session::has('post_deleted'))
                            <div class="alert alert-success" role="alert">
                                {{ Session::get('post_deleted') }}
                            </div>
                        @endif
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Position</th>
                                <th>On-boarding Date</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($employees as $employee)
                                <tr>

                                    <td>{{$employee -> id}}</td>
                                    <td>{{$employee -> first_name}}</td>
                                    <td>{{$employee -> last_name}}</td>
                                    <td>{{$employee -> position}}</td>
                                    <td>{{$employee -> onboarding_date }}</td>
                                    <td>
                                        <a href="/employees/{{ $employee -> id }}" class="btn  btn-info">Details</a>
                                        <a href="/edit-post/{{ $employee -> id }}" class="btn btn-success">Edit</a>
                                        <a href="/delete-post/{{ $employee -> id }}" class="btn btn-danger">Delete</a>
                                    </td>

                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
        crossorigin="anonymous"></script>

</body>
</html>
