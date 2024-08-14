<!DOCTYPE html>
<html>
<head>
    <title>New Visitor Message</title>
</head>
<body>
<h1>New Visitor Message Received</h1>
<p><strong>First Name:</strong> {{ $visitorMessage->first_name }}</p>
<p><strong>Last Name:</strong> {{ $visitorMessage->last_name }}</p>
<p><strong>Email:</strong> {{ $visitorMessage->email }}</p>
<p><strong>Phone:</strong> {{ $visitorMessage->phone }}</p>
<p><strong>Subject:</strong> {{ $visitorMessage->subject }}</p>
<p><strong>Message:</strong> {{ $visitorMessage->message }}</p>
</body>
</html>
