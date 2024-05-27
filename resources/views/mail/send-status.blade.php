<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Submission Status</title>
</head>

<body>
    <p>Hi,</p>
    <p>The submission by {{ $user->first_name }} {{ $user->last_name }}, manuscript ID {{ $submission->manuscript_id }},
        has been {{ $statusText }} by reviewer {{ $submission->reviewer->first_name }}
        {{ $submission->reviewer->last_name }}. Reviewer comments are attached. Please check the comments on our
        website.</p>
</body>

</html>
