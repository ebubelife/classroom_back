<!DOCTYPE html>
<html>
<head>
    <title>Verify Your Email</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .email-container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .email-header {
            text-align: center;
            padding: 20px 0;
            background-color: #00aff0;
            color: #ffffff;
            border-radius: 8px 8px 0 0;
        }
        .email-body {
            padding: 20px;
        }
        .verification-code {
            display: inline-block;
            background-color: #00aff0;
            color: #ffffff;
            font-size: 24px;
            padding: 10px 20px;
            border-radius: 4px;
            margin: 20px 0;
        }
        .email-footer {
            text-align: center;
            font-size: 14px;
            color: #777;
            padding: 20px 0;
            border-top: 1px solid #ddd;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="email-header">
            <h1>Verify Your Email</h1>
        </div>
        <div class="email-body">
            <p>Thank you for registering with us! To complete your registration, please verify your email address using the code below:</p>
            <div class="verification-code">{{ $verificationCode }}</div>
            <p>If you did not register with our service, please ignore this email.</p>
        </div>
        <div class="email-footer">
            <p>&copy; {{ date('Y') }} ClassRoom Reality. All rights reserved.</p>
        </div>
    </div>
</body>
</html>
