<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Assign to Peer Review</title>
    <style>
        .container {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            font-family: monospace;
        }

        .header {
            padding: 20px;
        }

        .header h1 {
            font-size: 24px;
            color: #333;
        }

        .content {
            padding: 20px;
        }

        .content p {
            margin: 0 0 20px;
            line-height: 1.6;
            color: #555;
        }

        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #000;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>Assign To Peer Review</h1>
        </div>
        <div class="content">
            <p>Hello, {{ $user->name }},</p>
            <p>We have assigned a submission to you for peer review. Please log in to your portal to review the
                submission.</p>
            <p>Login Credentails</p>
            <p>Email: {{ $user->email }}</p>
            <p>Password: {{ $newGeneratedPassword }}</p>
            <a href="{{ url(route('board.member.login')) }}" class="button" style="color:white">Go to Login Page</a>
        </div>
    </div>
</body>

</html>
