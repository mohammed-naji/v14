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

        <h1>All Posts</h1>
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
                <td><img width="80" src="{{ $post->image }}" alt=""></td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->created_at->format('d F, Y') }}</td>
                <td>{{ $post->updated_at->diffForHumans() }}</td>
                <td>
                    <a href="{{ route('posts.show', $post->id) }}" class="btn btn-success btn-sm"><i class="fas fa-eye"></i></a>
                    <a href="#" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                    <a href="#" class="btn btn-danger btn-sm"><i class="far fa-trash-can"></i></a>
                </td>
            </tr>
            @endforeach

        </table>

        {{ $posts->links() }}
    </div>



</body>
</html>
