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
<div class="d-flex justify-content-center">
<div class="card mt-5 border-5 shadow col-sm-8">
{{-- <div class="card-header"> --}}
<div class="card-title ms-5 mt-3">
    <h4>Form Pemesanan </h4> </div>
    <div class="card-body">
<form action="{{ route('reservasi.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <div class="row mb-3 ms-4">
            <label for="nama" class="col-sm-4 col-form-label">Nama</label>
            <div class="col-sm-6">
                <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama">
                 <!-- error message untuk title -->
                @error('nama')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
        @enderror
            </div>
          </div>
        </div>
        <div class="form-group">
            <div class="row mb-3 ms-4">
                <label for="nik" class="col-sm-4 col-form-label">NIK</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control @error('nik') is-invalid @enderror" name="nik">
                     <!-- error message untuk title -->
                    @error('nik')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
            @enderror
                </div>
              </div>
            </div>
            <div class="form-group">
                <div class="row mb-3 ms-4">
                    <label for="nohp" class="col-sm-4 col-form-label">Nohp</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control @error('nohp') is-invalid @enderror" name="nohp">
                         <!-- error message untuk title -->
                        @error('nohp')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                @enderror
                    </div>
                  </div>
                </div>

                <div class="form-group">
                    <div class="row mb-3 ms-4">
                        <label for="wisata" class="col-sm-4 col-form-label">wisata</label>
                        <div class="col-sm-6">
                            <select class="form-select" id="wisata" name="wisata">
                                @foreach ($harga as $dt)
                                   <option value="{{ $dt->id }}">{{ $dt->wisata->nama }}</option>
                                @endforeach
                             </select>
                             <!-- error message untuk title -->
                            @error('wisata')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                    @enderror
                        </div>
                      </div>
                    </div>

                <div class="form-group">
                    <div class="row mb-3 ms-4">
                        <label for="tglkunjungan" class="col-sm-4 col-form-label">Kunjungan</label>
                        <div class="col-sm-6">
                            <input type="date" class="form-control @error('tglkunjungan') is-invalid @enderror" name="tglkunjungan">
                             <!-- error message untuk title -->
                            @error('tglkunjungan')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                    @enderror
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                        <div class="row mb-3 ms-4">
                            <label for="dewasa" class="col-sm-4 col-form-label">Dewasa</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control @error('dewasa') is-invalid @enderror" name="dewasa">
                                 <!-- error message untuk title -->
                                @error('dewasa')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                        @enderror
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                            <div class="row mb-3 ms-4">
                                <label for="anak" class="col-sm-4 col-form-label">anak</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control @error('anak') is-invalid @enderror" name="anak">
                                     <!-- error message untuk title -->
                                    @error('anak')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                            @enderror
                                </div>
                              </div>
                            </div>
                            <div class="form-group">
                                <div class="row mb-3 ms-4">
                                    <label for="harga" class="col-sm-4 col-form-label">harga</label>
                                    <div class="col-sm-6">
                                        <p value="harga">Rp.000.000</p>
                                        {{-- <select  class="form-select" id="harga" name="harga">
                                            @foreach ($harga as $dt)
                                               <option value="{{ $dt->id }}">{{ $dt->harga }}</option>
                                            @endforeach
                                         </select> --}}
                                         <!-- error message untuk title -->
                                        @error('harga')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                @enderror
                                    </div>
                                  </div>
                                </div>
                            <div class="form-group">
                                <div class="row mb-3 ms-4">
                                    <label for="totbay" class="col-sm-4 col-form-label">totbay</label>
                                    <div class="col-sm-6">
                                        <p value="totbay">Rp.000.000</p>
                                        <input type="hidden" class="form-control @error('totbay') is-invalid @enderror" name="totbay">
                                         <!-- error message untuk title -->
                                        @error('totbay')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                @enderror
                                    </div>
                                  </div>
                                </div>

    <div class=" d-flex justify-content-center ">
        <button type="button" name="submit" value="totbay"  onclick="jumlah()" class="btn btn-primary">Hitung Total Bayar</button>&nbsp;
        <button type="submit" class="btn btn-primary">Pesan Tiket</button>&nbsp;
    </div>
 </form>

    </div>
  </div>
</div>
<div>

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>
