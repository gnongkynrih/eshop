<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <a href="{{ route('color.index')}}">Back</a>
    </div>
    <form method="POST" action="{{ route('color.insert')}}">
    @csrf
        <div>
            <label for="">Colour Name</label>
            <input type="text" name="name" />
            @error('name')
                <div> {{ $message }}</div>
            @enderror
        </div>
        <div>
            <button type="submit">Save</button>
        </div>
    </form>
</body>
</html>