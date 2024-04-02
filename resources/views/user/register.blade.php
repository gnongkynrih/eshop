<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
</head>
<body>
  {{-- create the registraion form using bootstra for styling --}}
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <form action="{{ route('user.store') }}" method="post">
          @csrf
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control">
            @error('name')
              <div class="text-warning">{{ $message }}</div>
            @enderror
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control">
             @error('email')
              <div class="text-warning">{{ $message }}</div>
            @enderror
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control">
             @error('password')
              <div class="text-warning">{{ $message }}</div>
            @enderror
          </div>
          <div class="form-group">
            <label for="password_confirmation">Confirm Password</label>
            <input type="password" name="password_confirmation" class="form-control">
             @error('password_confirmation')
              <div class="text-warning">{{ $message }}</div>
            @enderror
          </div>
         
          <button type="submit" class="btn btn-primary">Register</button>
        </form>
      </div>
    </div>
  </div>

  <script src="{{asset('js/bootstrap.min.js')}}" type="text/javascript"></script>
</body>
</html>