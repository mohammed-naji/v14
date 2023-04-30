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

        {{-- solid - fas
        regular - far
        brand - rab --}}

        {{-- <i class="fas fa-heart"></i>
        <i class="far fa-heart"></i>
        <i class="fab fa-facebook"></i>
        <i class="fab fa-twitter"></i> --}}

        @if (session('msg'))
            <div class="alert alert-success">
                {{ session('msg') }}
            </div>
        @endif


        <div class="d-flex justify-content-between align-items-center mb-3">
            <h1>All Posts</h1>
            <a href="{{ route('posts.create') }}" class="btn btn-dark">Add new Post</a>
        </div>

        <form action="{{ route('posts.index') }}" method="GET">
            <div class="input-group mb-3">
                <input name="search" type="text" class="form-control" value="{{ request()->search }}" placeholder="Search about anything ..." >
                <button class="btn btn-primary" id="button-addon2">Search</button>
            </div>
        </form>

        <table class="table table-bordered table-hover table-striped">
            <tr class="table-dark">
                <th>ID</th>
                <th>Image</th>
                <th>Title</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Actions</th>
            </tr>
            @foreach ($posts as $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td>
                    <img width="80" src="{{ asset('uploads/posts/'.$post->image) }}" alt=""></td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->created_at->format('d F, Y') }}</td>
                <td>{{ $post->updated_at->diffForHumans() }}</td>
                <td>
                    <a href="{{ route('posts.show', $post->id) }}" class="btn btn-success btn-sm"><i class="fas fa-eye"></i></a>
                    <a href="#" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                    {{-- <a href="{{ route('posts.destroy', $post->id) }}" class="btn btn-danger btn-sm"><i class="far fa-trash-can"></i></a> --}}

                    <form class="d-inline" action="{{ route('posts.destroy', $post->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <button onclick="return confirm('Are you sure?!')" class="btn btn-danger btn-sm"><i class="far fa-trash-can"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach

        </table>

        {{ $posts->appends($_GET)->links() }}
    </div>


</body>
</html>
