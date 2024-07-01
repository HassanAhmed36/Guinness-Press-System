<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Submission Status Update</title>
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
            <h1>Guinness Press Submission Update</h1>
        </div>
        <div class="content">
            <p>Hello,</p>
            <p><strong>Submission Title:</strong> {{ $submission->title }}</p>
            <p><strong>Stage and Status:</strong> {{ $stage }} ({{ $status }})</p>
            <p><strong>Feedback:</strong> {!! $feedback !!}</p>
            <p>{!! $messageContent !!}</p>
            <p>For further details, please review the feedback message by logging into your account at <a
                    href="https://guinnesspress.org/">Guinness Press</a>.</p>
        </div>
    </div>
</body>

</html>
