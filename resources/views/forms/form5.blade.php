<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form 5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <h1>Basic Form</h1>
        <form action="{{ route('form5_data') }}" method="post">

            @csrf

            <div class="row">

                <div class="col-sm-6">
                    <div class="mb-3">
                        <label>Name</label>
                        <input type="text" class="form-control" placeholder="Name" name="name" required />
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="mb-3">
                        <label>Email</label>
                        <input type="email" class="form-control" placeholder="Email" name="email" />
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="mb-3">
                        <label>Phone</label>
                        <input type="text" class="form-control" placeholder="Phone" name="phone" />
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="mb-3">
                        <label>Subject</label>
                        <input type="text" class="form-control" placeholder="Subject" name="subject" />
                    </div>
                </div>

                <div class="col-12">
                    <div class="mb-3">
                        <label>Message</label>
                        <textarea rows="5" class="form-control" placeholder="Message" name="message"></textarea>
                    </div>
                </div>

            </div>

            <button class="btn btn-primary px-5">Send</button>
        </form>
    </div>

</body>
</html>
