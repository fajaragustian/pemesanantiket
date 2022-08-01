@extends('layouts.app')
@section('title', 'Pemesanan Reservasi')
@section('content')

    <div class="container" style="margin-top:80px">
        <div class="d-flex justify-content-center">
            <div class="card mt-5 border border-dark shadow col-sm-8 mb-5">
                {{-- <div class="card-header"> --}}
                <div class="card-title  mt-5">
                    <h4>Form Pemesanan </h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('reservasi.store') }}" method="POST" enctype="multipart/form-data" id="my-form">
                        @csrf
                        <div class="form-group">
                            <div class="row mb-3 ms-4">
                                <label for="nama" class="col-sm-4 col-form-label">Nama Lengkap</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                        name="nama" required placeholder="Masukan Nama Lengkap Pengunjung">
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
                                <label for="nik" class="col-sm-4 col-form-label">Nomer Identitas</label>
                                <div class="col-sm-6">
                                    <input type="number" class="form-control @error('nik') is-invalid @enderror"
                                        name="nik" onKeyPress="if(this.value.length==16) return false;" required
                                        placeholder="Masukan Nomer Indentitas Pengunjung">
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
                                <label for="nohp" class="col-sm-4 col-form-label">Nomer Handphone</label>
                                <div class="col-sm-6">
                                    <input type="number" class="form-control @error('nohp') is-invalid @enderror"
                                        name="nohp" onKeyPress="if(this.value.length==12) return false;"
                                        placeholder="Masukan Nomer Handphone Pengunjung">
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
                                <label for="wisata" class="col-sm-4 col-form-label">Tempat Wisata</label>
                                <div class="col-sm-6">
                                    <select class="form-control" id="wisata" name="wisata">
                                        @foreach ($harga as $dt)
                                            <option data-harga="{{ $dt->harga }}" value="{{ $dt->id }}">
                                                {{ $dt->wisata->nama }}</option>
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
                                <label for="tglkunjungan" class="col-sm-4 col-form-label">Tanggal Kunjungan</label>
                                <div class="col-sm-6">
                                    <input type="date" class="form-control @error('tglkunjungan') is-invalid @enderror"
                                        name="tglkunjungan">
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
                                <label for="dewasa" class="col-sm-4 col-form-label"> Pengunjung Dewasa</label>
                                <div class="col-sm-6">
                                    <input type="number" class="form-control @error('dewasa') is-invalid @enderror"
                                        name="dewasa" id="dewasa" required
                                        placeholder="Masukan  Jumlah Pengujung Dewasa">
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
                                <label for="anak" class="col-sm-4 col-form-label">Pengunjung Anak-Anak<br>
                                    <small>Usia di bawah 12 Tahun</small>
                                </label>

                                <div class="col-sm-6 mt-2">
                                    <input type="number" class="form-control @error('anak') is-invalid @enderror"
                                        name="anak" id="anak" placeholder="Masukan  Jumlah Pengujung Anak">
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
                                <label for="harga" class="col-sm-4 col-form-label">Harga Tiket</label>
                                <div class="col-sm-6">
                                    Rp. <span id="harga-text">000.000</span>
                                    <input type="hidden" name="hargaId" id="hargaId">
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
                                <label for="totbay" class="col-sm-4 col-form-label">Total Bayar</label>
                                <div class="col-sm-6">
                                    Rp. <span id="totbay-text">000.000</span>
                                    <input type="hidden" name="totbay" id="totbay" value="">
                                    {{-- <input type="hidden" class="form-control @error('totbay') is-invalid @enderror" name="totbay"> --}}
                                    <!-- error message untuk title -->
                                    @error('totbay')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-check mb-4">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" style="width:15px; height:15px;">
                            <label class="form-check-label" for="defaultCheck1">
                             Saya dan/atau rombongan telah membaca, memahami, dan setuju berdasarkan syarat dan<br>
                             ketentuan yang telah berlaku
                            </label>
                          </div>

                        <div class=" d-flex justify-content-center ">
                            <button type="button" name="submit" value="totbay" onclick="jumlah()"
                                class="btn btn-primary col-lg-4">Hitung Total Bayar</button>&nbsp;
                            <button type="submit" class="btn btn-primary col-lg-4 ">Pesan Tiket</button>&nbsp;
                            {{-- <input type="reset" onclick="return confirm_reset();">&nbsp; --}}
                            <a class="btn btn-primary col-lg-4" role="button"
                                onclick="return confirm('Apakah anda yakin untuk membatalkan reservasi ini?')"
                                href="{{ route('reservasi.create') }}">Cancel</a>
                        </div>
                    </form>

                </div>
            </div>
        </div>
        <div>
            @push('script')
                <script>
                    // Menampilkan document berdasarkan data harga yang direlasikan terhadap table wisata tanpa memilih select terlebih dahulu
                    $(document).ready(function(e) {
                        $('#wisata').change();
                    })
                    // kalau input html dg id #wisata berubah (change), maka aksi ini dilakukan
                    $('#wisata').change(function(e) {
                        // ambil data-harga sesuai dg option yg dipilih
                        let harga = $('#wisata option:selected').data('harga');
                        // tampilkan ke elm html dg id #harga-text
                        $('#harga-text').html(harga.toLocaleString());
                    });
                    // Mengeksekusi function jumlah
                    function jumlah() {
                        // ambil nilai di dalam input total orang dewasa & anak
                        let dewasaTotal = $('#dewasa').val();
                        let anakTotal = $('#anak').val();

                        // ambil harga dari option yg dipilih
                        let harga = $('#wisata option:selected').data('harga');
                        // kalikan sesuai jumlah anak/dewasa
                        let totalHargaDewasa = dewasaTotal * harga;
                        let totalHargaAnak = anakTotal * (harga / 2);
                        // totalkan
                        let totalHargaAll = totalHargaDewasa + totalHargaAnak;
                        // ambil harga id (untuk), lalu masukkan nilainya ke input #hargaId
                        let hargaId = $('#wisata').val();
                        $('input#hargaId').val(hargaId);
                        // masukkan totalHargaAll ke input #tobay
                        $('input#totbay').val(totalHargaAll);
                        // tampilkan totbay
                        $('#totbay-text').html(totalHargaAll.toLocaleString());
                    }
                </script>
                {{-- Batalkan Reservasi tanpa refresh --}}
                {{-- <script>
                function  confirm_reset() {
                if(!confirm("Are You Sure to delete this"))
                window.location.href = "{{ route('reservasi.create')}}";
                }
                </script> --}}
            @endpush
