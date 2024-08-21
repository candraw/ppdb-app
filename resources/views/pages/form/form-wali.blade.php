@extends('layouts.main')
@section('content')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h3 class="mt-4">Form Calon Wali Murid</h3><br>
            <!-- <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="index.html">Form Calon Wali Murid</a></li>
                <li class="breadcrumb-item active">Data Wali Murid</li>
            </ol> -->
            <div class="card">
                <div class="card-header">
                    <!-- <h6 class="card-title">Form Biodata Calon Wali Murid</h6> -->
                </div>
                <div class="card-body">
                    <form>
                        <div class="row">
                            <!-- Bagian Ayah -->
                            <div class="col-md-6">
                                <div class="form-group mb-3 row">
                                    <label for="nama_ayah" class="col-sm-4 col-form-label">Nama Ayah</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="nama_ayah" name="nama_ayah" placeholder="Masukkan Nama Ayah" required>
                                    </div>
                                </div>

                                <div class="form-group mb-3 row">
                                    <label for="ttl_ayah" class="col-sm-4 col-form-label">Tempat & Tanggal Lahir</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="ttl_ayah" name="ttl_ayah" placeholder="Contoh : Tegal, 1 Januari 2000" required>
                                    </div>
                                </div>

                                <div class="form-group mb-3 row">
                                    <label for="agama_ayah" class="col-sm-4 col-form-label">Agama</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="agama_ayah" name="agama_ayah" placeholder="Masukkan Agama Ayah" required>
                                    </div>
                                </div>

                                <div class="form-group mb-3 row">
                                    <label for="no_telp_ayah" class="col-sm-4 col-form-label">Nomor Telepon Ayah</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="no_telp_ayah" name="no_telp_ayah" placeholder="Nomor Telepon/WA Ayah" required>
                                    </div>
                                </div>

                                <div class="form-group mb-3 row">
                                    <label for="pendidikan_ayah" class="col-sm-4 col-form-label">Pendidikan Ayah</label>
                                    <div class="col-sm-8">
                                        <select class="form-control" id="pendidikan_ayah" name="pendidikan_ayah" required>
                                            <option value="">Pilih Pendidikan</option>
                                            <option value="SD">SD</option>
                                            <option value="SMP">SMP</option>
                                            <option value="SMA">SMA</option>
                                            <option value="D1">D1</option>
                                            <option value="D2">D2</option>
                                            <option value="D3">D3</option>
                                            <option value="S1">S1</option>
                                            <option value="S2">S2</option>
                                            <option value="S3">S3</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group mb-3 row">
                                    <label for="pekerjaan_ayah" class="col-sm-4 col-form-label">Pekerjaan Ayah</label>
                                    <div class="col-sm-8">
                                        <select class="form-control" id="pekerjaan_ayah" name="pekerjaan_ayah" required>
                                            <option value="">Pilih Pekerjaan</option>
                                            <option value="PNS">PNS</option>
                                            <option value="Pegawai Swasta">Pegawai Swasta</option>
                                            <option value="Wiraswasta">Wiraswasta</option>
                                            <option value="TNI/Polri">TNI/Polri</option>
                                            <option value="PNS">Tidak Bekerja</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group mb-3 row">
                                    <label for="gaji_ayah" class="col-sm-4 col-form-label">Kisaran Gaji Ayah</label>
                                    <div class="col-sm-8">
                                        <select class="form-control" id="gaji_ayah" name="gaji_ayah" required>
                                            <option value="">Pilih Range Penghasilan</option>
                                            <option value="2">< 2 juta</option>
                                            <option value="25">2 s/d 5 juta</option>
                                            <option value="510">5 s/d 10 juta</option>
                                            <option value="1015">10 s/d 15 juta</option>
                                            <option value="15">> 15 juta</option>
                                            <option value="0">Tidak Berpenghasilan</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group mb-3 row">
                                    <label for="alquran_ayah" class="col-sm-4 col-form-label">Kemampuan Membaca Al-Qur'an</label>
                                    <div class="col-sm-8">
                                        <select class="form-control" id="alquran_ayah" name="alquran_ayah" required>
                                            <option value="">Pilih Kemampuan</option>
                                            <option value="Lancar">Lancar</option>
                                            <option value="Tanpa tajwid">Tanpa tajwid</option>
                                            <option value="Biasa">Biasa</option>
                                            <option value="Belum Bisa">Belum Bisa</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group mb-3 row">
                                    <label for="organisasi_ayah" class="col-sm-4 col-form-label">Organisasi/Majelis yang Diikuti</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="organisasi_ayah" name="organisasi_ayah" placeholder="Organisasi yang diikuti" required>
                                    </div>
                                </div>

                                <div class="form-group mb-3 row">
                                    <label for="buku_ayah" class="col-sm-4 col-form-label">Buku/Majalah yang Dibaca</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="buku_ayah" name="buku_ayah" placeholder="Masukkan Buku/Majalah yang dibaca" required>
                                    </div>
                                </div>
                            </div>

                            <!-- Bagian Ibu -->
                            <div class="col-md-6">
                                <div class="form-group mb-3 row">
                                    <label for="nama_ibu" class="col-sm-4 col-form-label">Nama Ibu</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="nama_ibu" name="nama_ibu" placeholder="Masukkan Nama Ibu" required>
                                    </div>
                                </div>

                                <div class="form-group mb-3 row">
                                    <label for="ttl_ibu" class="col-sm-4 col-form-label">Tempat & Tanggal Lahir</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="ttl_ibu" name="ttl_ibu" placeholder="Contoh : Tegal, 1 Januari 2000" required>
                                    </div>
                                </div>

                                <div class="form-group mb-3 row">
                                    <label for="agama_ibu" class="col-sm-4 col-form-label">Agama</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="agama_ibu" name="agama_ibu" placeholder="Masukkan Agama Ibu" required>
                                    </div>
                                </div>

                                <div class="form-group mb-3 row">
                                    <label for="no_telp_ibu" class="col-sm-4 col-form-label">Nomor Telepon Ibu</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="no_telp_ibu" name="no_telp_ibu" placeholder="Nomor Telepon/WA Ibu" required>
                                    </div>
                                </div>

                                <div class="form-group mb-3 row">
                                    <label for="pendidikan_ibu" class="col-sm-4 col-form-label">Pendidikan Ibu</label>
                                    <div class="col-sm-8">
                                        <select class="form-control" id="pendidikan_ibu" name="pendidikan_ibu" required>
                                            <option value="">Pilih Pendidikan</option>
                                            <option value="SD">SD</option>
                                            <option value="SMP">SMP</option>
                                            <option value="SMA">SMA</option>
                                            <option value="D1">D1</option>
                                            <option value="D2">D2</option>
                                            <option value="D3">D3</option>
                                            <option value="S1">S1</option>
                                            <option value="S2">S2</option>
                                            <option value="S3">S3</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group mb-3 row">
                                    <label for="pekerjaan_ibu" class="col-sm-4 col-form-label">Pekerjaan Ibu</label>
                                    <div class="col-sm-8">
                                        <select class="form-control" id="pekerjaan_ibu" name="pekerjaan_ibu" required>
                                            <option value="">Pilih Pekerjaan</option>
                                            <option value="PNS">PNS</option>
                                            <option value="Pegawai Swasta">Pegawai Swasta</option>
                                            <option value="Wiraswasta">Wiraswasta</option>
                                            <option value="TNI/Polri">TNI/Polri</option>
                                            <option value="Tidak bekerja">Tidak Bekerja</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group mb-3 row">
                                    <label for="gaji_ibu" class="col-sm-4 col-form-label">Kisaran Gaji Ibu</label>
                                    <div class="col-sm-8">
                                        <select class="form-control" id="gaji_ibu" name="gaji_ibu" required>
                                            <option value="">Pilih Range Penghasilan</option>
                                            <option value="2">< 2 juta</option>
                                            <option value="25">2 s/d 5 juta</option>
                                            <option value="510">5 s/d 10 juta</option>
                                            <option value="1015">10 s/d 15 juta</option>
                                            <option value="15">> 15 juta</option>
                                            <option value="0">Tidak Berpenghasilan</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group mb-3 row">
                                    <label for="alquran_ibu" class="col-sm-4 col-form-label">Kemampuan Membaca Al-Qur'an Ibu</label>
                                    <div class="col-sm-8">
                                        <select class="form-control" id="alquran_ibu" name="alquran_ibu" required>
                                            <option value="">Pilih Kemampuan</option>
                                            <option value="Lancar">Lancar</option>
                                            <option value="Tanpa tajwid">Tanpa tajwid</option>
                                            <option value="Biasa">Biasa</option>
                                            <option value="Belum Bisa">Belum Bisa</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group mb-3 row">
                                    <label for="organisasi_ibu" class="col-sm-4 col-form-label">Organisasi/Majelis yang Diikuti</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="organisasi_ibu" name="organisasi_ibu" placeholder="Masukkan organisasi yang diikuti" required>
                                    </div>
                                </div>

                                <div class="form-group mb-3 row">
                                    <label for="buku_ibu" class="col-sm-4 col-form-label">Buku/Majalah yang Dibaca Ibu</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="buku_ibu" name="buku_ibu" placeholder="Masukkan Buku/Majalah yang dibaca" required>
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
