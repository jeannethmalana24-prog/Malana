<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('sampleform') }}" method="POST">
        @csrf
        <input type="text" id="name" name="name" placeholder="Enter your name" required>
        <input type="number" id="age" name="age" required>
        <button type="submit">Submit</button>
    </form>
</body>
</html>