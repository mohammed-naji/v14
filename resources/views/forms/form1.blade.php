<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <h1>Basic Form</h1>
        <form action="{{ route('form1_data') }}" method="post">

            {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}" />

            {{ csrf_field() }} --}}

            @csrf

            <div class="mb-3">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Name" name="name" required />
            </div>
            <div class="mb-3">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Email" name="email" />
            </div>
            <div class="mb-3">
                <label>Phone</label>
                <input type="text" class="form-control" placeholder="Phone" name="phone" />
            </div>
            <button class="btn btn-primary px-5">Send</button>
        </form>
    </div>

</body>
</html>
