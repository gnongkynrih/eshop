<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <a href="{{ route('color.create')}}">Add New Color</a>
        <table>
        <tr><th>Color</th></tr>
        @foreach($colors as $color)
            <tr><td>{{ $color->name }}</td></tr>
        @endforeach
    </table>
        
    </div>
</body>
</html>