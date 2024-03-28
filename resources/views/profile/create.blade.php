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
  <div class="row  justify-content-center">
    @if(\Session::has('success'))
      <div class="alert alert-success" role="alert">
        {{ \Session::get('success') }}
      </div>

    @endif
    @if(\Session::has('failure'))
      <div class="alert alert-danger" role="alert">
        {{ \Session::get('failure') }}
      </div>
    @endif
    <div class="card col-md-4 bg-primary text-white">
      <div class="card-header">
        Profile Detail
      </div>
      <div class="card-body">
        {{-- form should send photo also --}}
        <form action="{{ route('profile.saveprofile') }}" method="POST" enctype="multipart/form-data" >
          @csrf
          <div class="mb-3">
            <label  class="form-label" for="name">Name</label>
            <input class="form-control" type="text" name="name" placeholder="Name">
            @error('name')
              <div class="text-warning">{{ $message }}</div>
            @enderror
          </div>
          <div class="mb-3">
            <label class="form-label" for="dob">Date of Birth</label>
            <input class="form-control" type="date" name="dob" placeholder="date of birth">
            @error('dob')
              <div class="text-warning">{{ $message }}</div>
            @enderror
          </div>
          <div class="mb-5">
            <label  class="form-label" for="picture">Upload profile picture</label>
            <input class="form-control" type="file" accept=".png, *.jpg, *.jpeg" name="picture" placeholder="Profile picture">
          </div>
          <div class="d-flex justify-content-between">
            <a class="btn btn-danger" href="{{route('profile.index')}}">Go Back</a>
            <button  class="btn btn-danger" type="submit">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  
  <script src="{{asset('js/bootstrap.min.js')}}" type="text/javascript"></script>
</body>
</html>