@extends('layouts.main')
@section('content')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h3 class="mt-4">Form Calon Peserta Didik</h3><br>
            <!-- <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="index.html">Form Calon Peserta didik</a></li>
                <li class="breadcrumb-item active">Data Pendaftar</li>
            </ol> -->
            <div class="card">
                <div class="card-header">
                    <!-- <h6 class="card-title">Form Biodata Calon Peserta Didik</h6> -->
                </div>
                <div class="card-body">
                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-3 row">
                                    <label for="nisn" class="col-sm-4 col-form-label">NISN</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="nisn" name="nisn" placeholder="Masukkan NISN" required>
                                    </div>
                                </div>

                                <div class="form-group mb-3 row">
                                    <label for="nama" class="col-sm-4 col-form-label">Nama Lengkap</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama lengkap sesuai KK/Akta" required>
                                    </div>
                                </div>

                                <div class="form-group mb-3 row">
                                    <label for="ttl" class="col-sm-4 col-form-label">Tempat & Tanggal Lahir</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="ttl" name="ttl" placeholder="Cth : Tegal, 1 Januari 2000" required>
                                    </div>
                                </div>

                                <div class="form-group mb-3 row">
                                    <label for="jenis_kelamin" class="col-sm-4 col-form-label">Jenis Kelamin</label>
                                    <div class="col-sm-8">
                                        <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
                                            <option value="">Pilih Jenis Kelamin</option>
                                            <option value="Laki-laki">Laki-laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group mb-3 row">
                                    <label for="agama" class="col-sm-4 col-form-label">Agama</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="agama" name="agama" placeholder="Masukkan agama" required>
                                    </div>
                                </div>

                                <div class="form-group mb-3 row">
                                    <label for="notelp" class="col-sm-4 col-form-label">Nomor Telepon/Wa</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="notelp" name="notelp" placeholder="Nomor Telepon/WA" required>
                                    </div>
                                </div>

                                <div class="form-group mb-3 row">
                                    <label for="anak_ke" class="col-sm-4 col-form-label">Anak ke</label>
                                    <div class="col-sm-8">
                                        <input type="number" class="form-control" id="anak_ke" name="anak_ke" placeholder="Anak Ke Berapa ?" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3 row">
                                    <label for="dari" class="col-sm-4 col-form-label">Jumlah Saudara</label>
                                    <div class="col-sm-8">
                                        <input type="number" class="form-control" id="jml" name="jml" placeholder="Berapa Bersaudara ?" required>
                                    </div>
                                </div>

                                <div class="form-group mb-3 row">
                                    <label for="alamat" class="col-sm-4 col-form-label">Alamat Lengkap</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan Nama Jalan, Gang, Nomor Rumah" required>
                                    </div>
                                </div>

                                <div class="form-group mb-3 row">
                                    <label for="rt" class="col-sm-4 col-form-label">RT</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="rt" name="rt" placeholder="Contoh: 012" required>
                                    </div>
                                </div>

                                <div class="form-group mb-3 row">
                                    <label for="rw" class="col-sm-4 col-form-label">RW</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="rw" name="rw" placeholder="Contoh: 013" required>
                                    </div>
                                </div>

                                <div class="form-group mb-3 row">
                                    <label for="kelurahan" class="col-sm-4 col-form-label">Kelurahan</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="kelurahan" name="kelurahan" placeholder="Masukkan Kelurahan" required>
                                    </div>
                                </div>

                                <div class="form-group mb-3 row">
                                    <label for="kecamatan" class="col-sm-4 col-form-label">Kecamatan</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="kecamatan" name="kecamatan" placeholder="Masukkan Kecamatan" required>
                                    </div>
                                </div>

                                <div class="form-group mb-3 row">
                                    <label for="kota_kabupaten" class="col-sm-4 col-form-label">Kota/Kabupaten</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="kota_kabupaten" name="kota_kabupaten" placeholder="Masukkan Kota/Kabupaten" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <br>
    @include('layouts.footer')
</div>
@endsection