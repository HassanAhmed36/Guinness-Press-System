<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pree submission File</title>
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
            <h1>Pre Publication File</h1>
        </div>
        <div class="content">
            <p>Hello, {{ $submission->user->user_basic_info->name }},</p>
            <p>Your submission is now in the publication stage. We have sent the file in article format. Please check
                this file on our website's submission page, and kindly approve or reject it. Your feedback will help us
                proceed with publication.</p>
            <a href="{{ url('/') }}" class="button" style="color:white">Go to Site</a>
        </div>
    </div>
</body>
</html>
