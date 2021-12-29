@extends('frontend.page-sesudah-login.layouts.app')
@section('content')
<div class="row">
    <div class="col-12">
        <div style="font-size: 26px;"><b>ALUR PENDAFTARAN</b></div>
        <div class="dropdown-divider" style="border: 3px solid rgba(0, 0, 0, 0.2);"></div>
        <br>

        <br>

        <button class="btn text-dark btn-secondary btn-block button-tambahan-shadow"><i
                class="fas fa-user-plus"></i> Lengkapi
            Profile</button>
        <button class="btn text-dark btn-warning btn-block button-tambahan-shadow" data-toggle="modal"
            data-target="#isi-data-siswa"><i class="fas fa-user-plus"></i> Isi Data Siswa</button>
        <button class="btn text-dark btn-info btn-block button-tambahan-shadow" data-toggle="modal"
            data-target="#isi-data-wali"><i class="fas fa-user-plus"></i> Isi Data Orang Tua/
            Wali</button>
        <button class="btn text-dark btn-primary btn-block button-tambahan-shadow" data-toggle="modal"
            data-target="#isi-data-dokumen"><i class="far fa-file"></i> Unggah Dokumen</button>

    </div>
</div>


<div class="modal fade" id="isi-data-siswa" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center">Isi Data Siswa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>Tanggal daftar</label>
                    <input type="date" class="form-control">
                </div>
                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label>Nama Panggilan</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input type="date" class="form-control">
                </div>
                <div class="form-group">
                    <label>Tempat Tanggal Lahir</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <select class="form-control">
                        <option>-- Pilih --</option>
                        <option>Laki - Laki</option>
                        <option>Perempuan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Kewarganegaraan</label>
                    <select class="form-control">
                        <option>-- Pilih --</option>
                        <option>WNI</option>
                        <option>NON WNI</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Agama</label>
                    <select class="form-control">
                        <option>-- Pilih --</option>
                        <option>Islam</option>
                        <option>Kristen</option>
                        <option>Hindu</option>
                        <option>Budha</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Anak Ke</label>
                    <select class="form-control">
                        <option>-- Pilih --</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Banyak Sodara Kandung</label>
                    <select class="form-control">
                        <option>-- Pilih --</option>
                        <option>0</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Banyak Sodara Kandung</label>
                    <select class="form-control">
                        <option>-- Pilih --</option>
                        <option>0</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Banyak Sodara Angkat</label>
                    <select class="form-control">
                        <option>-- Pilih --</option>
                        <option>0</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Bahasa</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label>Berat Badan</label>
                    <input type="number" class="form-control">
                </div>
                <div class="form-group">
                    <label>Tinggi Badan</label>
                    <input type="number" class="form-control">
                </div>
                <div class="form-group">
                    <label>Golongan Darah</label>
                    <select class="form-control">
                        <option>-- Pilih --</option>
                        <option>A</option>
                        <option>B</option>
                        <option>AB</option>
                        <option>O</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Bertempat Tinggal Pada</label>
                    <select class="form-control">
                        <option>-- Pilih --</option>
                        <option>Orang Tua</option>
                        <option>Menumpang</option>
                        <option>Asrama</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-sm btn-primary">Save</button>
            </div>
        </div>

    </div>
</div>


<div class="modal fade" id="isi-data-wali" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center">Isi Data Wali</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>Nama Bapak Kandung</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label>Nama Ibu Kandung</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label>Nomor KK</label>
                    <input type="number" class="form-control">
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <textarea class="form-control" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label>Agama</label>
                    <select class="form-control">
                        <option>-- Pilih --</option>
                        <option>Islam</option>
                        <option>Kristen</option>
                        <option>Hindu</option>
                        <option>Budha</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Nomor Handphone Ibu</label>
                    <input type="number" class="form-control">
                </div>
                <div class="form-group">
                    <label>Nomor Handphone Bapak</label>
                    <input type="number" class="form-control">
                </div>
                <div class="form-group">
                    <label>Pendidikan Terkahir Ayah</label>
                    <select class="form-control">
                        <option>-- Pilih --</option>
                        <option>S3</option>
                        <option>S2</option>
                        <option>S1</option>
                        <option>D3</option>
                        <option>D2</option>
                        <option>D1</option>
                        <option>SMA/SMK</option>
                        <option>SMP</option>
                        <option>SD</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Pendidikan Terkahir Ibu</label>
                    <select class="form-control">
                        <option>-- Pilih --</option>
                        <option>S3</option>
                        <option>S2</option>
                        <option>S1</option>
                        <option>D3</option>
                        <option>D2</option>
                        <option>D1</option>
                        <option>SMA/SMK</option>
                        <option>SMP</option>
                        <option>SD</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Pekerjaan Ayah </label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label>Pekerjaan Ibu </label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-sm btn-primary">Save</button>
            </div>
        </div>

    </div>
</div>


<div class="modal fade" id="isi-data-dokumen" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center">Upload Berkas Dokumen Siswa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label>Foto Akta Kelahiran Anak</label>
                        <input type="file" class="form-control-file">
                    </div>
                    <div class="form-group">
                        <label>Foto Kartu Keluarga </label>
                        <input type="file" class="form-control-file">
                    </div>
                    <div class="form-group">
                        <label>Foto Surat Pernyataan </label>
                        <input type="file" class="form-control-file">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-sm btn-primary">Save</button>
            </div>
        </div>

    </div>
</div>

@endsection