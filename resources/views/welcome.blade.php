<!-- resources/views/welcome.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Management</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container text-center mt-5">
        <h1>Welcome to Contact Management</h1>
        <p class="mt-3">Click the button below to view contacts.</p>
        <a href="{{ route('contacts.index') }}" class="btn btn-primary">View Contacts</a>
    </div>
</body>
</html>
