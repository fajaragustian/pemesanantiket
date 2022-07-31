<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Wisata</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
        aria-expanded="false" aria-label="Toggle navigation"></button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item active">
          {{-- <a class="nav-link" href="#">Pesanan <span class="sr-only">(current)</span></a> --}}
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('wisata.index') }}">Wisata</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('daftarharga.index') }}">DaftarHarga</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('reservasi.create') }}">Reservasi</a>
          </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>
  <div class="container" style="margin-top:80px">
    <div class="card">

    <div class="card-header">
        Wisata
    </div>
        <div class="card-body">

            <form action="{{ route('daftarharga.store') }}" method="POST" enctype="multipart/form-data"  id="form" name="form">
                @csrf

                  <div class="row mb-3 ms-4">
                    <label for="wisata" class="col-sm-4 col-form-label">Wisata</label>
                    <div class="col-sm-6">
                        <select class="form-select" id="wisata" name="wisata">
                            @foreach ($wisata as $dt)
                               <option value="{{ $dt->id }}">{{ $dt->nama }}</option>
                            @endforeach
                         </select>
                    </div>
                  </div>
                  <div class="row mb-3 ms-4">
                    <label for="harga" class="col-sm-4 col-form-label">Harga</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="harga" name="harga">
                    </div>
                  </div>



                <div class=" d-flex">
                    <button type="submit" class="btn btn-primary">Submit</button>&nbsp;
                </div>
             </form>

        </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>
