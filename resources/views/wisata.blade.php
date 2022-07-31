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
    <a  type="submit"  role="button" href="{{ route('wisata.create') }}" class="btn btn-primary col-2 mt-4 ml-4">Tambah Data</a>
        <div class="card-body">
            <table class="table table-striped table-inverse ">
                <thead class="thead-inverse">
                    <tr>
                        <th>Nama</th>
                        <th>Image</th>
                        <th>Link</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($wisata as $dt)
                        <tr>

                            <td scope="row">{{ $dt->nama }}</td>
                            <td class="text-center">
                                <img src="{{ Storage::url('public/wisata/').$dt->image }}" class="rounded" style="width: 150px">
                            </td>
                            <td>{{ $dt->link }}</td>
                        </tr>
                        @endforeach
                    </tbody>
            </table>

        </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>
