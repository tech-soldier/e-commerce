<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <p style="color:red">This message was submitted by the contact form at your website.</p>

<p>Message submitted by {{ $user_email }}.</p>

<p style="padding:20px; background-color: #cfcfcf">Message body: {{ $user_message }} </p>
</body>
</html>
