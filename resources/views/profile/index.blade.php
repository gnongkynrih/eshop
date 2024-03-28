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

@php
  use Carbon\Carbon; //import the carbon class to format the date
@endphp
<div class="row  justify-content-center">
  <div class="card col-10">
    <a class="mt-5 btn btn-danger col-2" href="{{route('profile.create')}}">Add new profile</a>
    <table class="table table-striped table-bordered table-hover table-responsive">
      <thead>
        <tr>
          <th>Name</th><th>Date of Birth</th><th>Profile Picture</th>
        </tr>
      </thead>
      <tbody>
        @foreach($profiles as $profile)
          <tr>
            <td>{{ $profile->name }}</td>
            <td>{{ Carbon::parse($profile->dob)->format('j F, Y') }}</td>
            <td><img src="{{ asset('storage/images/'.$profile->picture) }}" alt="Profile Picture" class="img-fluid"></td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
  <script src="{{asset('js/bootstrap.min.js')}}" type="text/javascript"></script>
</body>
</html>