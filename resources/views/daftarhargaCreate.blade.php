@extends('layouts.app')
@section('title','Create Daftar Harga')
@section('content')
    <div class="container" style="margin-top:80px">
        <div class="card">

            <div class="card-header">
                Create Harga
            </div>
            <div class="card-body">

                <form action="{{ route('daftarharga.store') }}" method="POST" enctype="multipart/form-data"
                    id="form" name="form">
                    @csrf
                    <div class="form-group">
                        <div class="row mb-3 ml-4">
                            <label for="wisata" class="col-sm-4 col-form-label">Tempat Wisata</label>
                            <div class="col-sm-6">
                                <select class="form-control" id="wisata" name="wisata">
                                    @foreach ($wisata as $dt)
                                        <option value="{{ $dt->id }}">
                                            {{ $dt->nama }}</option>
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
                    <div class="row mb-3 ml-4">
                        <label for="harga" class="col-sm-4 col-form-label">Harga</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="harga" name="harga">
                        </div>
                    </div>
                    </div>

                    <div class=" d-flex" style="margin-left:40px">
                        <button type="submit" class="btn btn-primary">Submit</button>&nbsp;
                    </div>
                </form>

            </div>
        </div>
    </div>

@endsection
