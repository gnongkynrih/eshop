<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
    <a href="{{ route('category.create')}}">Add New Category</a>
    <table>
        <tr><th>Category</th></tr>
        @foreach($categories as $c)
            <tr><td>{{ $c->name }}</td></tr>
        @endforeach
    </table>
</body>
</html>