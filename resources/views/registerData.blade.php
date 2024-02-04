<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>

    <div class="register-container" style="ms-auto me-auto mt-3">
        <form action="{{route('registration_post')}}" method="POST" >
            @csrf
            <div class="mb-3">
                <label class="form-label">Username</label>
                <input value="{{old('username')}}" type="text" class="form-control" name="username">
              </div>

            @error('username')
              <div class="alert alert-danger" role="alert">{{$message}}</div>
            @enderror

            <div class="mb-3">
              <label class="form-label">Password</label>
              <input value="{{old('password')}}" type="password" class="form-control" name="password">
            </div>

            @error('password')
              <div class="alert alert-danger" role="alert">{{$message}}</div>
            @enderror

            <div class="mb-3">
                <label class="form-label">Confirm Password</label>
                <input type="password" class="form-control" name="password_confirmation">
                @if ($errors->has('password'))
                    <div class="alert alert-danger" role="alert">{{$errors->first('password')}}</div>
                @endif
              </div>
            <div class="mb-3">
                <label class="form-label">Identity</label>
                <select class="form-select" aria-label="Default select example" name="identity_name">
                    @foreach ($identity as $i)
                        <option value="{{$i->id}}">{{$i->identity_name}}</option>
                    @endforeach
                  </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
