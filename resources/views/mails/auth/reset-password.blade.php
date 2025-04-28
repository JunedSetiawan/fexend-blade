<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notification Email</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f1f5f9;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            background: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .header {
            font-size: 20px;
            font-weight: bold;
            color: #615fff;
            text-align: center;
        }

        .content {
            font-size: 16px;
            color: #333333;
            margin-top: 10px;
            text-align: center;
        }

        .button {
            display: inline-block;
            background: #615fff;
            color: #ffffff;
            text-decoration: none;
            padding: 10px 20px;
            margin-top: 20px;
            border-radius: 5px;
        }

        .footer {
            margin-top: 20px;
            font-size: 12px;
            text-align: center;
            color: #888888;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">Forgot Password</div>
        <div class="content">
            <p>Hi {{ $user->name }},</p>
            <p>We received a request to reset your password. Please click the button below to reset it.</p>
            <a href="{{ $url }}" class="button">Reset Password</a>
            <p>If you did not request a password reset, no further action is required.</p>
        </div>
        <div class="footer">&copy; {{ \App\Supports\Carbon::nowWithAppTimezone()->format('Y') }} {{ config('app.name') }}. All rights reserved.</div>
    </div>
</body>

</html>
