<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <a href="{{ route('category.index')}}">Go Back</a>
    </div>
   <form method="post" action="{{ route('category.store')}}">
    @csrf
        <div>
            <label for="">Enter Category</label>
            <input type="text" name="name" id="name">
            @error('name')
                <div>{{ $message }}</div>
            @enderror
        <div>
            <button type="submit">Save</button>
        </div>
    </form>
</body>
</html>