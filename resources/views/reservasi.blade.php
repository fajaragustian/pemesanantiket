@extends('layouts.app')
@section('title','Daftar Anterian Reservasi')
@section('content')
<div class="container" style="margin-top:80px">
    <div class="card">
        <div class="card-header">
           Daftar Antrian Reservasi
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
                        <th>Nama Reservasi</th>
                        <th>Tempat Wisata</th>
                        <th>Kunjungan</th>
                        <th>Total Bayar</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $dt)
                        <tr class="text-center">
                            <td>{{ $dt->nama }}</td>
                            <td id="wisata">{{ $dt->wisata->nama }}</td>
                            <td>{{ $dt->tglkunjungan }}</td>
                            <td class="totbay">{{ $dt->totbay }}</td>
                            <td>
                                {{-- <form onsubmit="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini ?');"
                                    action="{{ route('wisata.destroy', $dt->id) }}" method="POST"> --}}
                                    <a href="{{ route('reservasi.show', $dt->id) }}"
                                        class="btn btn-sm btn-warning mb-2"><span><i
                                                class="fa-regular fa-eye"> Details</i></span></a> &nbsp;
                                    {{-- Button Edit --}}
                                    {{-- <a href="{{ route('wisata.edit', $dt->id) }}"
                                    class="btn btn-sm btn-primary mb-2"><span><i class="fa-solid fa-pen-to-square"></i></span></a> &nbsp; --}}
                                    {{-- Button Delete --}}
                                    {{-- @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger mb-2 "><span><i
                                                class="fa-solid fa-trash-can"></i></span></button> &nbsp;
                                </form> --}}
                            </td>
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
@push('script')
{{-- Convert Html to Jquery Rupiah --}}
<script>
$(document).ready( function() {
  $("td.totbay").each(function() { $(this).html(parseFloat($(this).text()).toLocaleString('id-ID', {style: 'currency', currency: 'IDR',   minimumFractionDigits: 0,})); })
})
</script>
<script>
    $(document).ready( function() {
      $("td.harga").each(function() { $(this).html(parseFloat($(this).text()).toLocaleString('id-ID', {style: 'currency', currency: 'IDR',   minimumFractionDigits: 0,})); })
    })
    </script>
@endpush
@endsection


