<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Submission Thank You</title>
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
            margin: 0 0 10px;
            line-height: 1.6;
        }

        .button {
            display: block;
            width: fit-content;
            padding: 10px 20px;
            background-color: #000000;
            color: #ffffff;
            text-decoration: none;
            border-radius: 4px;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>Thanks For Your Submission</h1>
        </div>  
        <div class="content">
            <p style="margin-bottom: 20px">Thank you for submitting your work. We appreciate your contribution!</p>
            <p>To track the progress of your submission, please log in to your account.</p>
            <p>If you have any questions or need further assistance, feel free to contact us.</p>
            <a href="{{ url('/user-login') }}" class="button">Log In to Your Account</a>
        </div>
    </div>
</body>
</html>
