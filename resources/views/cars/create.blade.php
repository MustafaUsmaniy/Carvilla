<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <form action="{{route('store')}}" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="form-group">
                <label>Photo</label>
                <input type="file" name="photo" class="form-control">
            </div>
            <div class="form-group">
                <label>Model</label>
                <input type="text" name="model" class="form-control" placeholder="Enter model">
            </div>
            <div class="form-group">
                <label>Title</label>
                <input type="text" name="title" class="form-control" placeholder="Enter title">
            </div>
            <div class="form-group">
                <label>Price</label>
                <input type="text" name="price" class="form-control" placeholder="Enter price">
            </div>
            <div class="form-group">
                <label>Description</label>
                <textarea name="description" class="form-control" cols="30" rows="10"></textarea>
            </div>
            <button type="submit" class="btn btn-primary mt-4">Submit</button>
            <a href="/" class="btn btn-success mt-4">Cancel</a>
        </form>
    </div>
</body>

</html>
