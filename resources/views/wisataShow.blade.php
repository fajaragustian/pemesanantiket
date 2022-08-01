@extends('layouts.app')
@section('title','Show Wisata')
@section('content')
    <div class="container" style="margin-top:80px">
        <div class="card">
            <div class="card-header">
               Show Wisata
            </div>
            <div class="card-body">
                <div class="form-group">
                    <div class="row mb-3">
                        <label for="nama" class="col-sm-1 col-form-label font-weight-bold">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control @error('link') is-invalid @enderror" name="link"
                            value="{{ $data->nama }}" readonly>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="font-weight-bold">Gambar</label>
                   <img  class="ml-3 rounded"src="{{ Storage::url('public/wisata/') . $data->image }}" style="width:400px; height:200px;">
                </div>

                <div class="form-group">
                    <label class="font-weight-bold">Link</label>
                    <iframe class ="ml-5 rounded"width="400" height="200" src="{{ $data->link }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
<div class="d-flex justify-content-end">
    <a role="button" class="btn btn-primary col-sm-2" style="margin-right:86px"href="{{ route('wisata.index') }}">Back</a>

</div>

            </div>

        </div>
    </div>

@endsection
