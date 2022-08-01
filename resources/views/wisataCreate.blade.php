@extends('layouts.app')
@section('title','Create Wisata')
@section('content')
    <div class="container" style="margin-top:80px">
        <div class="card">

            <div class="card-header">
            Create Wisata
            </div>
            <div class="card-body">

                <form action="{{ route('wisata.store') }}" method="POST" enctype="multipart/form-data">

                    @csrf

                    <div class="form-group">
                        <label class="font-weight-bold">Gambar</label>
                        <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">
                        <!-- error message untuk title -->
                        @error('image')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="font-weight-bold">Nama</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama"
                            value="{{ old('nama') }}" placeholder="Masukkan Judul">

                        <!-- error message untuk title -->
                        @error('nama')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="font-weight-bold">Link</label>
                        <input type="text" class="form-control @error('link') is-invalid @enderror" name="link"
                            value="{{ old('link') }}" placeholder="Masukkan Konten Link">

                        <!-- error message untuk content -->
                        @error('link')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                    <button type="reset" class="btn btn-md btn-warning">Reset</button>

                </form>

            </div>
        </div>
    </div>
  @endsection
