<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Category</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Add Category</h1>
        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ $message }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if ($message = Session::get('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>{{ $message }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <form action="{{ ((isset($data->id)) && ($data->id != "")) ? route('category.update', $data) : route('category.store') }}" method="{{ ((isset($data->id)) && ($data->id != "")) ? 'post' : 'post' }}">

            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="row">
                <div class="col-md-12">
                    <div class="mb-3">
                        <label for="category_name">Category Name</label>
                        <input class="form-control" id="category_name" type="text" name="category_name" value="{{ (isset($data->id) && $data->id != '') ? $data->category_name : '' }}">
                        @if ($errors->has('category_name'))
                            <span class="text-danger">
                                {{ $errors->first('category_name') }}
                            </span>
                        @endif
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="mb-3">
                        <label for="description">Category Description</label>
                        <textarea class="form-control" id="description" rows="3" name="description">{{ (isset($data->id) && $data->id != '') ? $data->description : '' }}</textarea>
                    </div>
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">Save Category</button>
                    <a href="{{ route('category.list') }}" class="btn btn-danger">Cancel</a>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
