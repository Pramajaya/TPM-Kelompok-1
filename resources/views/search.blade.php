<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if(count($results) > 0)
    <ul>
        @foreach ($results as $h)
        <div class="card" style="width: 18rem;">
            <img src="{{asset('/storage/cv/'.$h->cv)}}" class="card-img-top" alt="...">
            <img src="{{asset('/storage/id_card/'.$h->id_card)}}" class="card-img-bottom" alt="...">
            <div class="card-body">
              <h5 class="card-title">Ketua: {{$h->nama_ketua}}</h5>
              <p class="card-text">Email: {{$h->email}}</p>
              <p class="card-text">WA: {{$h->nomor_whatsapp}}</p>
              <p class="card-text">Line: {{$h->id_line}}</p>
              <p class="card-text">Github: {{$h->id_github}}</p>
              <p class="card-text">dob: {{$h->tanggal_lahir_ketua}}</p>
              <p class="card-text">Tempat Lahir: {{$h->tempat_lahir}}</p>
              <a href="{{ route('edit', $h->id) }}" class="btn btn-success">Edit</a>
              <form action="{{ route('delete', $h->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        @endforeach
    </ul>
    @else
    <p>No results found.</p>
    @endif
</body>
</html>
