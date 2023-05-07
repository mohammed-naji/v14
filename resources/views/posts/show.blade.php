<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

    <div class="container my-5 text-center">

        <h1 class="mb-4">{{ $post->title }}</h1>
        <img class="mb-5" src="{{ $post->image }}" alt="">
        {{-- <p>{{ $post->content }}</p> --}}
        {!! $post->content !!}

        <hr>

        <h2>Comments ({{ $post->comments->count() }})</h2>

        <div class="text-start w-50 mx-auto">
            @foreach ($post->comments as $comment)
                <div class="d-flex align-items-center">
                    <h5 class="m-0">{{ $comment->user->name }}</h5>
                    <small class="mx-3">{{ $comment->created_at->diffForHumans() }}</small>
                </div>
                <p>{{ $comment->comment }}</p>
            @endforeach
        </div>
    </div>



</body>
</html>
