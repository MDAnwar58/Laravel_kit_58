<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Info</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/frontend_custom.css') }}">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h4>{{ $contact->user->first_name }} {{ $contact->user->last_name }}</h4>
                <p>{{ $contact->email }}</p>
                <div class="send_subject">
                    <p>{{ $contact->subject }}</p>
                </div>
                <p>{{ $contact->msg }}</p>
            </div>
        </div>
    </div>
</body>
</html>
