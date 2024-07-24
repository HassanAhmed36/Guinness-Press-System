<!DOCTYPE html>
<html>
<head>
    <title>New Submission</title>
</head>
<body>
    <p>New submission received from the landing page.</p>
    <ul>
        <li><strong>Name:</strong> {{ $data['name'] }}</li>
        <li><strong>Email:</strong> {{ $data['email'] }}</li>
        <li><strong>Phone Number:</strong> {{ $data['number'] }}</li>
        <li><strong>Country:</strong> {{ $data['country'] }}</li>
        <li><strong>journal:</strong> {{ $data['journal'] }}</li>
        <li><strong>url:</strong> {{ $url }}</li>
    </ul>
</body>
</html>
