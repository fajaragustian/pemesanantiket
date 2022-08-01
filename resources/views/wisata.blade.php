@extends('layouts.app')
@section('title','Daftar Wisata')
@section('content')
<div class="container" style="margin-top:80px">
    <div class="card">
        <div class="card-header">
            Wisata
        </div>
        {{-- Button Tambah --}}
        {{-- <div class="">
            <a type="submit" role="button" href="{{ route('wisata.create') }}"
                class="btn btn-primary col-xs-4 mt-4 ml-4">Tambah Data</a>
        </div> --}}
        <div class="card-body">
            <table class="table table-striped table-inverse table-responsive-lg ">
                <thead class="thead-inverse">
                    <tr class=" text-center">
                        <th>Nama</th>
                        <th>Image</th>
                        <th>Link</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($wisata as $dt)
                        <tr class="text-center">
                            <td scope="row">{{ $dt->nama }}</td>
                            <td class="text-center">
                                <img src="{{ Storage::url('public/wisata/') . $dt->image }}" class="rounded"
                                    style="width: 150px">
                            </td>
                            <td><iframe width="150" height="100" src="{{ $dt->link }}"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </td>
                            <td>
                                <form onsubmit="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini ?');"
                                    action="{{ route('wisata.destroy', $dt->id) }}" method="POST">
                                    <a href="{{ route('wisata.show', $dt->id) }}"
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
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
        <div class="ml-4">
            {{ $wisata->links() }}
        </div>
    </div>
</div>
@endsection


