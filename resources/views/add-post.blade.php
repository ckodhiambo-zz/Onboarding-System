<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Centum On-boarding</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    </head>
    <body>
        <section style="padding-top: 60px">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <div class="card">
                            <div class="card-header">
                                <strong>EMPLOYEE ON-BOARDING DETAILS</strong>
                            </div>
                            <div class="card-body">
                                @if(Session::has('post_created'))
                                    <div class="alert alert-success" role="alert">
                                        {{Session::get('post_created')}}
                                    </div>
                                @endif
                                <form method="post" action="{{ route('post.create') }}">
                                    @csrf
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="Fname">
                                                <strong>First Name</strong>
                                            </label>
                                            <input type="text" name="first_name" class="form-control" placeholder="First name" required/>
                                        </div>
                                        <br>
                                        <div class="form-group col-md-6">
                                            <label for="Lname">
                                                <strong>Last Name</strong>
                                            </label>
                                            <input type="text" name="last_name" class="form-control" placeholder="Last name" required/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputGroupSelect01">
                                            <strong>Company</strong>
                                        </label>
                                        <select class="custom-select" name="company_id" id="company_id">
                                            <option selected>Select Company</option>
                                            @foreach ($companies as $company)
                                                <option value="{{$company->id}}">{{$company->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group" id="company_{{$company->id}}">
                                        <label for="inputGroupSelect01">
                                            <strong>Department</strong>
                                        </label>
                                        <select class="custom-select" name="department_id">
                                            <option selected>Select Department</option>
                                            @foreach ($companies as $company)
                                                @foreach ($company->departments as $department)
                                                    <option class="departments company_{{$company->id}}" value="{{$department->id}}">{{$department->name}}</option>
                                                @endforeach
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>
                                            <strong>Position</strong>
                                        </label>
                                        <input type="text" name="position" class="form-control" placeholder="Position" required/>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputGroupSelect01">
                                            <strong>Software Applications (All Entities)</strong>
                                        </label>
                                    </div>
                                    @foreach ($required_softwares as $software)
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" name="software_id[]" value="{{$software->id}}">
                                            <label class="form-check-label" for="inlineCheckbox1">{{$software->name}}</label>
                                        </div>
                                    @endforeach
                                    <br>
                                    <br>
                                    <div class="form-group">
                                        <label for="inputGroupSelect01">
                                            <strong>Software Applications (Specific Entities)</strong>
                                        </label>
                                    </div>
                                    @foreach ($optional_softwares as $software)
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" name="software_id[]" value="{{$software->id}}">
                                            <label class="form-check-label" for="inlineCheckbox1">{{$software->name}}</label>
                                        </div>
                                    @endforeach
                                    <br>
                                    <br>
                                    <div class="form-group">
                                        <label for="inputGroupSelect01">
                                            <strong>Hardware Accessories</strong>
                                        </label>
                                    </div>
                                    @foreach ($hardwares as $hardware)
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" name="hardware_id[]" value="{{$hardware->id}}">
                                            <label class="form-check-label" for="inlineCheckbox1">{{$hardware->name}}</label>
                                        </div>
                                    @endforeach
                                    <br>
                                    <br>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>
                                                <strong>On-boarding Date</strong>
                                            </label>
                                            <input type="date" name="onboarding_date" class="form-control" required/>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>
                                                <strong>Supervisor</strong>
                                            </label>
                                            <input type="text" name="supervisor" class="form-control" placeholder="Supervisor" required/>
                                        </div>
                                    </div>
                                    <br>
                                    <button type="submit" class="btn btn-success">Add Employee</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
        <script>
            $('#company_id').change((event) => {
                $('.departments').hide();
                $(`.company_${event.target.value}`).show();
            });
            $(document).ready(function () {
                $('.departments').hide();
            });
        </script>
    </body>
</html>
