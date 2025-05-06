<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <link rel="stylesheet" href="https://matcha.mizu.sh/matcha.css">
</head>
<body>
    <h1>User Regsitration Form</h1>
    <form action= "{{route('registration.post')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name">

        <label for="username">Username:</label>
        <input type="text" id="username" name="username">

        <label for="phone">Phone:</label>
        <input type="text" id="phone" name="phone">

        <label for="email">Email:</label>
        <input type="text" id="email" name="email">

        <br>
        <input type="file" name="photo" id="">
        <br>
        <button type="submit">Register</button>
    </form>
</body>
</html>
