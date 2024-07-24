<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Verification Email</title>
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
            /* text-align: center; */
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
            /* margin: 20px auto; */
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
            <h1>Email Verification</h1>
        </div>
        <div class="content">
            <p>Hello,</p>
            <p style="margin-bottom: 20px">Please verify your email address by clicking the link below:</p>
            <a href="{{ url(route('verify.lead', ['id' => $lead->id])) }}" class="button"
                style="color:white;">Verify
                Email</a>

        </div>

    </div>
</body>

</html>
