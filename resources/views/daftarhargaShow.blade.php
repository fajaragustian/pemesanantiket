@extends('layouts.app')
@section('title', 'Show Daftar Harga')
@section('content')
    <div class="container" style="margin-top:80px">
        <div class="card">
            <div class="card-header">
                Show Harga
            </div>
            <div class="card-body">
                <div class="form-group">
                    <div class="row mb-3">
                        <label for="nama" class="col-sm-2 col-form-label font-weight-bold">Nama Wisata</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control @error('link') is-invalid @enderror" name="link"
                                value="{{ $data->wisata->nama }}" readonly>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row mb-3">
                        <label for="nama" class="col-sm-2 col-form-label font-weight-bold">Harga</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control @error('link') is-invalid @enderror" name="link"
                                value="{{ 'Rp.' . $data->harga }}" readonly>
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-end">
                    <a role="button" class="btn btn-primary col-sm-2"
                        style="margin-right:86px"href="{{ route('daftarharga.index') }}">Back</a>

                </div>

            </div>

        </div>
    </div>

@endsection
