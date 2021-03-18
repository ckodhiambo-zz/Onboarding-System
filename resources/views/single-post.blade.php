<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Employee Details</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    </head>
    <body>
        <section style="padding-top: 60px">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <div class="card">
                            <div class="card-header">
                                <strong>EMPLOYEE DETAILS</strong>
                            </div>
                            <br>
                            <div class="card-body">
                                <strong>First name:</strong>
                                <p>{{ $employee -> first_name }}</p>
                                <strong>Last name:</strong>
                                <p>{{ $employee -> last_name }}</p>
                                <strong>Position:</strong>
                                <p>{{ $employee -> position }}</p>
                                <strong>Company Entity:</strong>
                                @foreach($employee->companies as $item)
                                    <p>{{ $item->name }}</p>
                                @endforeach
                                <strong>Department:</strong>
                                @foreach($employee->departments as $item)
                                    <p>{{ $item->name }}</p>
                                @endforeach
                                <strong>Hardware:</strong>
                                @foreach($employee->hardwares as $item)
                                    <p>{{ $item->name }}</p>
                                @endforeach
                                <strong>Software:</strong>
                                @foreach($employee->softwares as $item)
                                    <p>{{ $item->name }}</p>
                                @endforeach

                                {{--                        <strong>Entity Department: </strong>--}}
                                {{--                        <p>{{}}</p>--}}
                                {{--                        <strong>First name: </strong>--}}
                                {{--                        <p></p>--}}
                                {{--                        <strong>Last name: </strong>--}}
                                {{--                        <p></p>--}}
                                <strong>Supervisor:</strong>
                                <p>{{ $employee -> supervisor }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    </body>
</html>
