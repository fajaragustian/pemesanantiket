@extends('layouts.app')
@section('title', 'Show Daftar Harga')
@section('content')
    <div class="container d-flex justify-content-center col-lg-8" style="margin-top:80px">
        <div class="card col-lg-9">
            <div class="card-title ml-3 mt-5">
                <h4>Show Reservasi Details </h4>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <div class="row mb-3">
                        <label class="col-sm-4 col-form-label font-weight-bold">Nama Pemesan </label>
                        <div class="col-sm-4">
                            <p>: {{ $data->nama }}</p>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row mb-3">
                        <label class="col-sm-4 col-form-label font-weight-bold">Nomer Indentitas </label>
                        <div class="col-sm-4">
                            <p>: {{ $data->nik }}</p>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row mb-3">
                        <label class="col-sm-4 col-form-label font-weight-bold">Nomer Handphone </label>
                        <div class="col-sm-4">
                            <p>: {{ $data->nohp }}</p>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row mb-3">
                        <label class="col-sm-4 col-form-label font-weight-bold">Tempat Wisata </label>
                        <div class="col-sm-4">
                            <p id="wisata" name="wisata">: {{ $data->wisata->nama }}</p>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row mb-3">
                        <label class="col-sm-4 col-form-label font-weight-bold">Tanggal Kunjungan </label>
                        <div class="col-sm-4">
                            <p>: {{ $data->tglkunjungan }}</p>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row mb-3">
                        <label class="col-sm-4 col-form-label font-weight-bold">Pengunjung Dewasa </label>
                        <div class="col-sm-4">
                            <p>: {{ $data->dewasa }} orang</p>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row mb-3">
                        <label class="col-sm-4 col-form-label font-weight-bold">Pengunjung Anak-Anak </label>
                        <div class="col-sm-4">
                            <p>: {{ $data->anak }} orang</p>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row mb-3">
                        <label class="col-sm-4 col-form-label font-weight-bold">Harga Tiket </label>
                        <div class="col-sm-4">
                       <p>: {{ $data->daftar_harga->harga }}</p>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row mb-3">
                        <label class="col-sm-4 col-form-label font-weight-bold">Total Bayar </label>
                        <div class="col-sm-4">
                            <td type="number" class="totbay">: Rp. {{ $data->totbay }}</td>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <a role="button" class="btn btn-primary col-sm-2"
                        style="margin-right:86px"href="{{ route('reservasi.index') }}">Back</a>
                </div>
            </div>
        </div>
    </div>
    @push('script')
    <script>
        $(document).ready(function() {
        $('#wisata').keyup(function(e) {
        // ambil data-harga sesuai dg option yg dipilih
        let harga = $('#wisata').data('harga');
        // tampilkan ke elm html dg id #harga-text
        $('#harga-text').html(harga.toLocaleString());
        });
    });
    </script>
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

    @endpush
@endsection
