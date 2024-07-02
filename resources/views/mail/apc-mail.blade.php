<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Approve Submission</title>
    <style>
        .container {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            font-family: monospace;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .header {
            padding: 20px 0;
            border-bottom: 1px solid #eee;
        }

        .header h1 {
            font-size: 24px;
            color: #333;
            margin: 0;
        }

        .content {
            padding: 20px 0;
        }

        .content p {
            margin: 0 0 10px;
            line-height: 1.6;
            font-size: 16px;
        }

        .button {
            display: inline-block;
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
            <h1>Pay Your APC Now </h1>
        </div>
        <div class="content">
            <p>Hello {{ $author->name }},</p>
            <p>Your submission (ID: {{ $author->submission->submission_id }}) has passed the initial QA process and has
                been approved.</p>
            <p>To proceed further, please make the APC payment at your earliest convenience. Once payment is completed,
                kindly reply to this email confirming the payment. This will allow us to update your submission status
                and proceed to the next step, which involves peer review.</p>
            <p>Thank you for your prompt attention to this matter.</p>
            <a href="#" class="button" style="color:white">Pay APC Now</a>
        </div>
    </div>
</body>

</html>
