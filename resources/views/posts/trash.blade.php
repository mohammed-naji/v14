<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

    <div class="container mt-5">

        @if (session('msg'))
            <div class="alert alert-success">
                {{ session('msg') }}
            </div>
        @endif


        <div class="d-flex justify-content-between align-items-center mb-3">
            <h1>Trashed Posts</h1>
            <a href="{{ route('posts.index') }}" class="btn btn-dark">All Post</a>
        </div>

        <table class="table table-bordered table-hover table-striped">
            <tr class="table-dark">
                <th>ID</th>
                <th>Title</th>
                <th>Deleted At</th>
                <th>Actions</th>
            </tr>
            @foreach ($posts as $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->deleted_at->diffForHumans() }}</td>
                <td>
                    <a href="{{ route('posts.restore', $post->id) }}" class="btn btn-primary btn-sm"><i class="fas fa-undo"></i></a>
                    <a onclick="return confirm('Are you sure?!')" href="{{ route('posts.forecedelete', $post->id) }}" class="btn btn-danger btn-sm"><i class="fas fa-times"></i></a>
                </td>
            </tr>
            @endforeach

        </table>

        {{ $posts->appends($_GET)->links() }}
    </div>


</body>
</html>
