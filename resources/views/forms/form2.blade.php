<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <h1>Info Form</h1>
        <form action="{{ route('form2_data') }}" method="post">

            <div class="mb-3">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Name" name="name" />
            </div>
            <div class="mb-3">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Email" name="email" />
            </div>

            <div class="mb-3">
                <label>Phone</label>
                <input type="text" class="form-control" placeholder="Phone" name="phone" />
            </div>

            <div class="mb-3">
                <label>Password</label>
                <input type="password" class="form-control" placeholder="Password" name="password" />
            </div>

            <div class="mb-3">
                <label>Date of Birth</label>
                <input type="date" class="form-control" name="dob" />
            </div>

            @csrf

            <button class="btn btn-primary px-5">Send</button>
        </form>
    </div>

</body>
</html>
