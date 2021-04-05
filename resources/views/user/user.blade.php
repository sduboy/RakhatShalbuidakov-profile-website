<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <form method="POST" action="{{ route('add-user') }}" > 
        @csrf
        <input type="text" name="name" placeholder="Name">
        <input type="text" name="surname" placeholder="Surname">
        <input type="email" name="email" placeholder="Email">
        <input type="file" name="image" placeholder="Photo">
        <button type="submit" name="submit">Add user</button>
    </form>
</body>
</html>