<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form Submission</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .container {
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 20px;
        }
        h2 {
            color: #2c3e50;
            border-bottom: 2px solid #3498db;
            padding-bottom: 10px;
        }
        .field {
            margin-bottom: 15px;
        }
        .field-label {
            font-weight: bold;
            color: #555;
            display: block;
            margin-bottom: 5px;
        }
        .field-value {
            background-color: #fff;
            padding: 10px;
            border-radius: 3px;
            border: 1px solid #e0e0e0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>New Contact Form Submission</h2>

        <div class="field">
            <span class="field-label">Name:</span>
            <div class="field-value">{{ $name }}</div>
        </div>

        <div class="field">
            <span class="field-label">Phone Number:</span>
            <div class="field-value">{{ $phone }}</div>
        </div>

        <div class="field">
            <span class="field-label">Email:</span>
            <div class="field-value">{{ $email }}</div>
        </div>

        <div class="field">
            <span class="field-label">Message:</span>
            <div class="field-value">{{ $message }}</div>
        </div>
    </div>
</body>
</html>

