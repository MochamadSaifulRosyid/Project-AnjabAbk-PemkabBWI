<!DOCTYPE html>
<html>
<head>
    <title>Pesan dari Kontak Form</title>
</head>
<body>
    <h1>Pesan Baru</h1>
    <p><strong>Nama:</strong> {{ $details['name'] }}</p>
    <p><strong>Email:</strong> {{ $details['email'] }}</p>
    <p><strong>Telepon:</strong> {{ $details['phone'] }}</p>
    <p><strong>Pesan:</strong> {{ $details['message'] }}</p>
</body>
</html>
