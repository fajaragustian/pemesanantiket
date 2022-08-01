@extends('layouts.app')
@section('title','Daftar Harga')
@section('content')
    <div class="container" style="margin-top:80px">
        <div class="card">

            <div class="card-header">
              Daftar Harga
            </div>
            {{-- Button Tambah --}}
            {{-- <a type="submit" role="button" href="{{ route('daftarharga.create') }}"
                class="btn btn-primary col-2 mt-4 ml-4">Tambah Data</a> --}}
            <div class="card-body">
                <table class="table table-striped table-inverse ">
                    <thead class="thead-inverse">
                        <tr>
                            <th>Wisata</th>
                            <th>Harga</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $dt)
                            <tr>
                                <td scope="row">{{ $dt->wisata->nama }}</td>
                                <td>{{ $dt->harga }}</td>
                                <td>
                                    <form onsubmit="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini ?');"
                                        action="{{ route('daftarharga.destroy', $dt->id) }}" method="POST">
                                        <a href="{{ route('daftarharga.show', $dt->id) }}"
                                            class="btn btn-sm btn-warning mb-2"><span><i
                                                    class="fa-regular fa-eye"></i></span></a> &nbsp;
                                        {{-- Button Edit --}}
                                        {{-- <a href="{{ route('wisata.edit', $dt->id) }}"
                                        class="btn btn-sm btn-primary mb-2"><span><i class="fa-solid fa-pen-to-square"></i></span></a> &nbsp; --}}
                                        {{-- Button Delete --}}
                                        {{-- @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger mb-2 "><span><i
                                                    class="fa-solid fa-trash-can"></i></span></button> &nbsp; --}}
                                    </form>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
            <div class="ml-4">
                {{ $data->links() }}
            </div>
        </div>
    </div>

@endsection
