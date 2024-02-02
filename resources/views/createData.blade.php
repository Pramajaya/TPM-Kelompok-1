<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
    <div class="p-5">
        <h1 class="text-center">Create Book</h1>
        <form action="{{route('store')}}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="mb-3">
            <label for="" class="form-label">nama ketua</label>
            <input type="text" class="form-control" id="" name="nama_ketua">
          </div>
          @error('nama_ketua')
            <div class="alert alert-danger">{{$message}}</div>
          @enderror
          <div class="mb-3">
            <label for="" class="form-label">Email</label>
            <input type="email" class="form-control" id="" name="email">
          </div>
          @error('email')
            <div class="alert alert-danger">{{$message}}</div>
          @enderror
          <div class="mb-3">
            <label for="" class="form-label">No. Whatsapp</label>
            <input type="text" class="form-control" id="" name="nomor_whatsapp">
          </div>
          @error('nomor_whatsapp')
            <div class="alert alert-danger">{{$message}}</div>
          @enderror
          <div class="mb-3">
            <label for="" class="form-label">ID Line</label>
            <input type="text" class="form-control" id="" name="id_line">
          </div>
          @error('id_line')
            <div class="alert alert-danger">{{$message}}</div>
          @enderror
          <div class="mb-3">
            <label for="" class="form-label">ID Github</label>
            <input type="text" class="form-control" id="" name="id_github">
          </div>
          @error('id_github')
          <div class="alert alert-danger">{{$message}}</div>
          @enderror
          <div class="mb-3">
              <label for="" class="form-label">Tanggal Lahir Ketua</label>
              <input type="date" class="form-control" id="" name="tanggal_lahir_ketua">
          </div>
          @error('tanggal_lahir_ketua')
          <div class="alert alert-danger">{{$message}}</div>
        @enderror
          <div class="mb-3">
            <label for="" class="form-label">CV</label>
            <input type="file" class="form-control" id="" name="cv">
          </div>
          @error('cv')
          <div class="alert alert-danger">{{$message}}</div>
        @enderror
          <div class="mb-3">
            <label for="" class="form-label">ID card</label>
            <input type="file" class="form-control" id="" name="id_card">
          </div>
          @error('id_card')
          <div class="alert alert-danger">{{$message}}</div>
        @enderror
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
