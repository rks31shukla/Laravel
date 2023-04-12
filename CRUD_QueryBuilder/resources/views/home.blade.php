<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <title>CRUD Query Builder</title>
</head>

<body>
    <div class="container mt-5 ">
        <div class="row">
            <div class="col-sm-6">
                <form action="" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="city" class="form-label">City</label>
                        <input type="text" class="form-control" id="city" name="city">
                    </div>
                    <div class="mb-3">
                        <label for="marks" class="form-label">Marks</label>
                        <input type="text" class="form-control" id="marks" name="marks">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                @if (session()->has('status'))
                    <div class="alert alert-success">
                        {{session('status')}}
                    </div>
                @endif
            </div>
            <div class="col-sm-6">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">City</th>
                            <th scope="col">Marks</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $stu)
                            <tr>
                                <th>{{ $stu->id }}</th>
                                <td>{{ $stu->name }}</td>
                                <td>{{ $stu->city }}</td>
                                <td>{{ $stu->marks }}</td>

                                 <td>
                                    <a href="{{ url('/editform', $stu->id) }}" class="btn btn-info btn-sm">Edit</a>
                                    <a href="{{ url('/delete', $stu->id) }}" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
