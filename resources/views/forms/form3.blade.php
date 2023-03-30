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

    <div class="container my-5">
        <h1>Register Form</h1>

        {{-- @dump($errors)

        @dump($errors->any())

        @dump($errors->all()) --}}

        {{-- Global Error Messages --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('form3_data') }}" method="post">
            @csrf

            <div class="mb-3">
                <label>Name</label>
                <input type="text" name="name" placeholder="Name" class="form-control @error('name') is-invalid @enderror " />
                @error('name')
                    <small class="invalid-feedback">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3">
                <label>Email</label>
                <input type="email" name="email" placeholder="Email" class="form-control" />
            </div>

            <div class="mb-3">
                <label>Date Of Birth</label>
                <input type="date" name="dob" class="form-control" />
            </div>

            <div class="mb-3">
                <label>Start Event</label>
                <input type="date" name="start_event" class="form-control" />
            </div>

            <div class="mb-3">
                <label>End Event</label>
                <input type="date" name="end_event" class="form-control" />
            </div>

            <div class="mb-3">
                <label>Password</label>
                <input type="password" name="password" placeholder="Password" class="form-control" />
            </div>

            <div class="mb-3">
                <label>Confirm Password</label>
                <input type="password" name="password_confirmation" placeholder="Confirm Password" class="form-control" />
            </div>

            <div class="mb-3">
                <label>Gnder</label> <br>
                <input type="radio" name="gender" id="male" />
                <label for="male">Male</label> <br>
                <label><input type="radio" name="gender" /> Female</label>
            </div>

            <div class="mb-3">
                <label>Bio</label>
                <textarea class="form-control" name="bio" rows="4"></textarea>
            </div>

            <button class="btn btn-success">Register</button>

        </form>
    </div>

</body>
</html>
