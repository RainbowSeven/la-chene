<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Request for Quote from {{ $email }}</title>
</head>
<body>
    <h1>Request for Quote from {{ $email }}</h1>
    <div>
    Firstname: {{ $firstname }} <br>
    Lastname: {{ $lastname }} <br>
    Email: {{ $email }} <br>
    Phone: {{$phone }} <br>
    Location: {{$location }}<br>
</div>
<blockquote>Service category:<br>
    {{ $service_category }}
</blockquote>

<blockquote>Service detail:<br>
    {{ $service_detail }}
</blockquote>
</body>
</html>
