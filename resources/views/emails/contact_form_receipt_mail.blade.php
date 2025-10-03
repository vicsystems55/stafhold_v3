<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact form receipt</title>
    <style>
        body { font-family: Arial, sans-serif; color: #333; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; }
        .header { background:#0b8f6e; color:#fff; padding:10px 20px; border-radius:4px; }
        .section { margin-top:20px; }
        .label { font-weight:700; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>New contact form submission</h2>
        </div>

        <div class="section">
            <p><span class="label">Name:</span> {{ $data['name'] ?? '' }}</p>
            <p><span class="label">Email:</span> {{ $data['email'] ?? '' }}</p>
            <p><span class="label">Subject:</span> {{ $data['subject'] ?? '' }}</p>
            <p><span class="label">Message:</span></p>
            <div style="padding:10px;border-left:4px solid #eee;background:#fafafa">{{ $data['user_message'] ?? '' }}</div>
        </div>

        <div class="section">
            <p>This message was submitted through the website contact form.</p>
        </div>
    </div>
</body>
</html>
