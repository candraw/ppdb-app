@extends('layouts.main')
@section('content')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h3 class="mt-4">Form Calon Peserta Didik</h3>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="index.html">Form Calon Peserta didik</a></li>
                <li class="breadcrumb-item active">Data Pendaftar</li>
            </ol>
            <div class="card">
                <div class="card-header">
                    <!-- <h6 class="card-title">Form Biodata Calon Peserta Didik</h6> -->
                </div>
                <div class="card-body">
                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-3 row">
                                    <label for="nisn" class="col-sm-4 col-form-label"><b>NISN</b></label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="nisn" name="nisn" placeholder="Masukkan NISN" required>
                                    </div>
                                </div>

                                <div class="form-group mb-3 row">
                                    <label for="nama" class="col-sm-4 col-form-label"><b>Nama Lengkap</b></label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama lengkap" required>
                                    </div>
                                </div>

                                <div class="form-group mb-3 row">
                                    <label for="ttl" class="col-sm-4 col-form-label"><b>Tempat, Tanggal Lahir</b></label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="ttl" name="ttl" placeholder="Masukkan tempat, tanggal lahir" required>
                                    </div>
                                </div>

                                <div class="form-group mb-3 row">
                                    <label for="jenis_kelamin" class="col-sm-4 col-form-label"><b>Jenis Kelamin</b></label>
                                    <div class="col-sm-8">
                                        <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
                                            <option value="">Pilih Jenis Kelamin</option>
                                            <option value="Laki-laki">Laki-laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group mb-3 row">
                                    <label for="agama" class="col-sm-4 col-form-label"><b>Agama</b></label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="agama" name="agama" placeholder="Masukkan agama" required>
                                    </div>
                                </div>

                                <div class="form-group mb-3 row">
                                    <label for="notelp" class="col-sm-4 col-form-label"><b>Nomor Telepon/HP/Wa</b></label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="notelp" name="notelp" placeholder="Nomor Telepon Siswa" required>
                                    </div>
                                </div>

                                <div class="form-group mb-3 row">
                                    <label for="anak_ke" class="col-sm-4 col-form-label"><b>Anak ke Berapa</b></label>
                                    <div class="col-sm-8">
                                        <input type="number" class="form-control" id="anak_ke" name="anak_ke" placeholder="Masukkan urutan anak" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3 row">
                                    <label for="dari" class="col-sm-4 col-form-label"><b>Dari berapa bersaudara</b></label>
                                    <div class="col-sm-8">
                                        <input type="number" class="form-control" id="dari" name="dari" placeholder="Dari berapa bersaudara" required>
                                    </div>
                                </div>

                                <div class="form-group mb-3 row">
                                    <label for="alamat" class="col-sm-4 col-form-label"><b>Alamat Lengkap</b></label>
                                    <div class="col-sm-8">
                                        <textarea class="form-control" id="alamat" name="alamat" rows="3" placeholder="Masukkan alamat lengkap" required></textarea>
                                    </div>
                                </div>

                                <div class="form-group mb-3 row">
                                    <label for="rt" class="col-sm-4 col-form-label"><b>RT</b></label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="rt" name="rt" placeholder="Masukkan RT" required>
                                    </div>
                                </div>

                                <div class="form-group mb-3 row">
                                    <label for="rw" class="col-sm-4 col-form-label"><b>RW</b></label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="rw" name="rw" placeholder="Masukkan RW" required>
                                    </div>
                                </div>

                                <div class="form-group mb-3 row">
                                    <label for="kelurahan" class="col-sm-4 col-form-label"><b>Kelurahan</b></label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="kelurahan" name="kelurahan" placeholder="Masukkan kelurahan" required>
                                    </div>
                                </div>

                                <div class="form-group mb-3 row">
                                    <label for="kecamatan" class="col-sm-4 col-form-label"><b>Kecamatan</b></label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="kecamatan" name="kecamatan" placeholder="Masukkan kecamatan" required>
                                    </div>
                                </div>

                                <div class="form-group mb-3 row">
                                    <label for="kota_kabupaten" class="col-sm-4 col-form-label"><b>Kota/Kabupaten</b></label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="kota_kabupaten" name="kota_kabupaten" placeholder="Masukkan kota/kabupaten" required>
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