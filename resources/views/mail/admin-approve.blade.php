<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Submission Status</title>
</head>

<body>
    <p>Hi {{ $user->first_name }} {{ $user->last_name }}, your submitted submission {{ $submission->menuscript_id }} is
        {{ $statusText }}. Reviewer comments are attached. Please check the comments on our website.</p>
</body>

</html>
