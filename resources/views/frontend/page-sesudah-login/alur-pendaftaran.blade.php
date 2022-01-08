@extends('frontend.page-sesudah-login.layouts.app')
@section('content')
<div class="row">
    <div class="col-12">
        <div style="font-size: 26px;"><b>ALUR PENDAFTARAN</b></div>
        <div class="dropdown-divider" style="border: 3px solid rgba(0, 0, 0, 0.2);"></div>
        <br>

        <br>


        <button class="btn  btn-warning btn-block button-tambahan-shadow isi-data-siswa text-light"><i
                class="fas fa-user-plus"></i> Isi Data Siswa</button>
        <button class="btn  btn-info btn-block button-tambahan-shadow isi-data-wali    "><i
                class="fas fa-user-plus"></i>
            Isi Data Orang Tua/
            Wali</button>
        <button class="btn  btn-primary btn-block button-tambahan-shadow text-light" data-toggle="modal"
            data-target="#isi-data-dokumen"><i class="far fa-file"></i> Unggah Dokumen</button>

    </div>
</div>


<div class="modal fade" id="isi-data-siswa" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header background-modal-header">
                <h5 class="modal-title text-center">Isi Data Siswa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="form-isi-data-siswa" action="#">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Tanggal daftar</label>
                                <input type="date" class="form-control" id="tanggal_daftar" name="tanggal_daftar">
                            </div>
                            <div class="form-group">
                                <label>Nama Lengkap</label>
                                <input type="text" class="form-control" id="nama_lengkap_siswa"
                                    name="nama_lengkap_siswa">
                            </div>
                            <div class="form-group">
                                <label>Kewarganegaraan</label>
                                <select class="form-control" id="kewarganegaraan" name="kewarganegaraan">
                                    <option value="">-- Pilih --</option>
                                    <option value="WNI">WNI</option>
                                    <option value="NON WNI">NON WNI</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Agama</label>
                                <select class="form-control" id="agama" name="agama">
                                    <option value="">-- Pilih --</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen">Kristen</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Budha">Budha</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Banyak Sodara Tiri</label>
                                <select class="form-control" id="banyak_sdr_tiri" name="banyak_sdr_tiri">
                                    <option value="">-- Pilih --</option>
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Bahasa</label>
                                <input type="text" class="form-control" id="bahasa" name="bahasa">
                            </div>
                            <div class="form-group">
                                <label>Berat Badan</label>
                                <input type="number" class="form-control" id="berat_badan" name="berat_badan">
                            </div>
                            <div class="form-group">
                                <label>Riwayat Penyakit</label>
                                <input type="text" class="form-control" id="riwayat_penyakit" name="riwayat_penyakit">
                            </div>
                            <div class="form-group">
                                <label>Bertempat Tinggal Bersama</label>
                                <select class="form-control" id="bertempat_tinggal_bersama"
                                    name="bertempat_tinggal_bersama">
                                    <option value="">-- Pilih --</option>
                                    <option value="Orang Tua">Orang Tua</option>
                                    <option value="Menumpang">Menumpang</option>
                                    <option value="Asrama">Asrama</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir">
                            </div>

                            <div class="form-group">
                                <label>Nama Panggilan</label>
                                <input type="text" class="form-control" id="nama_panggilan" name="nama_panggilan">
                            </div>
                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                                    <option value="">-- Pilih --</option>
                                    <option value="Laki - Laki">Laki - Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Anak Ke</label>
                                <select class="form-control" id="anak_ke" name="anak_ke">
                                    <option value="">-- Pilih --</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Banyak Sodara Kandung</label>
                                <select class="form-control" id="banyak_sdr_kandung" name="banyak_sdr_kandung">
                                    <option value="">-- Pilih --</option>
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Banyak Sodara Angkat</label>
                                <select class="form-control" id="banyak_sdr_angkat" name="banyak_sdr_angkat">
                                    <option value="">-- Pilih --</option>
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Tinggi Badan</label>
                                <input type="number" class="form-control" id="tinggi_badan" name="tinggi_badan">
                            </div>
                            <div class="form-group">
                                <label>Golongan Darah</label>
                                <select class="form-control" id="golongan_darah" name="golongan_darah">
                                    <option value="">-- Pilih --</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="AB">AB</option>
                                    <option value="0">O</option>
                                </select>
                            </div>

                        </div>
                    </div>
                    {{-- <div class="form-group">
                        <label>Tempat Tanggal Lahir</label>
                        <input type="text" class="form-control" id="" name="">
                    </div> --}}
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary save-isi-data-siswa">Save</button>
            </div>
        </div>

    </div>
</div>


<div class="modal fade" id="isi-data-wali" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header background-modal-header">
                <h5 class="modal-title text-center">Isi Data Wali</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="form-isi-data-wali" action="#">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Nama Ayah Kandung</label>
                                <input type="text" class="form-control" name="nama_ayah_kandung" id="nama_ayah_kandung">
                            </div>
                            <div class="form-group">
                                <label>Nomor KK</label>
                                <input type="number" class="form-control" name="nomor_kk" id="nomor_kk">
                            </div>
                            <div class="form-group">
                                <label>Pendidikan Terkahir Ayah</label>
                                <select class="form-control" name="pendidikan_akhir_ayah" id="pendidikan_akhir_ayah">
                                    <option value="">-- Pilih --</option>
                                    <option value="S3">S3</option>
                                    <option value="S2">S2</option>
                                    <option value="S1">S1</option>
                                    <option value="D3">D3</option>
                                    <option value="D2">D2</option>
                                    <option value="D1">D1</option>
                                    <option value="SMA/SMK">SMA/SMK</option>
                                    <option value="SMP">SMP</option>
                                    <option value="SD">SD</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Nomor Handphone Ayah</label>
                                <input type="number" class="form-control" name="nomor_handphone_ayah"
                                    id="nomor_handphone_ayah">
                            </div>
                            <div class="form-group">
                                <label>Pekerjaan Ayah </label>
                                <input type="text" class="form-control" name="pekerjaan_ayah" id="pekerjaan_ayah">
                            </div>
                            <div class="form-group">
                                <label>Hubungan terhadap anak</label>
                                <select class="form-control" id="hubungan_terhadap_anak" name="hubungan_terhadap_anak">
                                    <option value="">-- Pilih --</option>
                                    <option value="Anak Kandung">Anak Kandung</option>
                                    <option value="Anak Angkat">Anak Angkat</option>
                                    {{-- <option value="Asrama">Asrama</option> --}}
                                </select>
                            </div>

                            {{-- AKHIR DARI COL 6 --}}
                        </div>


                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Nama Ibu Kandung</label>
                                <input type="text" class="form-control" name="nama_ibu_kandung" id="nama_ibu_kandung">
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea class="form-control" name="alamat" id="alamat" rows="3"></textarea>
                            </div>

                            <div class="form-group">
                                <label>Nomor Handphone Ibu</label>
                                <input type="number" class="form-control" name="nomor_handphone_ibu"
                                    id="nomor_handphone_ibu">
                            </div>
                            <div class="form-group">
                                <label>Pendidikan Terkahir Ibu</label>
                                <select class="form-control" name="pendidikan_akhir_ibu" id="pendidikan_akhir_ibu">
                                    <option value="">-- Pilih --</option>
                                    <option value="S3">S3</option>
                                    <option value="S2">S2</option>
                                    <option value="S1">S1</option>
                                    <option value="D3">D3</option>
                                    <option value="D2">D2</option>
                                    <option value="D1">D1</option>
                                    <option value="SMA/SMK">SMA/SMK</option>
                                    <option value="SMP">SMP</option>
                                    <option value="SD">SD</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Pekerjaan Ibu </label>
                                <input type="text" class="form-control" name="pekerjaan_ibu" id="pekerjaan_ibu">
                            </div>
                            <div class="form-group">
                                <label>Agama</label>
                                <select class="form-control" name="agama" id="agama">
                                    <option value="">-- Pilih --</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen">Kristen</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Budha">Budha</option>
                                </select>
                            </div>

                            {{-- AKHIR DARI COL 6 --}}
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn  btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn  btn-primary save-isi-data-wali">Save</button>
            </div>
            </form>
        </div>

    </div>
</div>


<div class="modal fade" id="isi-data-dokumen" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header background-modal-header">
                <h5 class="modal-title text-center">Upload Berkas Dokumen Siswa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="#" id="form-upload-berkas" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label><b>Foto Siswa</b></label>
                        <input type="file" class="form-control-file" name="foto_siswa">
                    </div>
                    <div class="form-group">
                        <label><b>Foto Akta Kelahiran Anak</b></label>
                        <input type="file" class="form-control-file" name="foto_akta_lahir">
                    </div>
                    <div class="form-group">
                        <label><b>Foto Kartu Keluarga </b></label>
                        <input type="file" class="form-control-file" name="foto_kartu_keluarga">
                    </div>
                    <div class="form-group">
                        <label><b>Foto Surat Pernyataan </b></label>
                        <input type="file" class="form-control-file" name="foto_surat_pernyataan">
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn  btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn  btn-primary">Save</button>
            </div>
            </form>
        </div>

    </div>
</div>

@endsection


@push('page-script')

<script src="{{ asset('backend/js/sweetalert.min.js') }}"></script>
<script
    src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js
                                                                                                                                                                                                                                        ">
</script>
<script type="text/javascript">
    $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('body').on('click', '.isi-data-siswa', function() {
                // $('label').removeClass('error');
                $('.save-isi-data-siswa').attr('disabled', false);
                $.get(`{{ route('edit-data-siswa') }}`, function(data) {

                    $('#isi-data-siswa').modal('show');
                    $('#tanggal_daftar').val(data.tanggal_daftar);
                    $('#nama_lengkap_siswa').val(data.nama_lengkap_siswa);
                    $('#nama_panggilan').val(data.nama_panggilan);
                    $('#riwayat_penyakit').val(data.riwayat_penyakit);
                    $('#tanggal_lahir').val(data.tanggal_lahir);
                    $('#jenis_kelamin').val(data.jenis_kelamin);
                    $('#kewarganegaraan').val(data.kewarganegaraan);
                    $('#agama').val(data.agama);
                    $('#anak_ke').val(data.anak_ke);
                    $('#banyak_sdr_kandung').val(data.banyak_sdr_kandung);
                    $('#banyak_sdr_tiri').val(data.banyak_sdr_tiri);
                    $('#banyak_sdr_angkat').val(data.banyak_sdr_angkat);
                    $('#bahasa').val(data.bahasa);
                    $('#berat_badan').val(data.berat_badan);
                    $('#tinggi_badan').val(data.tinggi_badan);
                    $('#golongan_darah').val(data.golongan_darah);
                    $('#bertempat_tinggal_bersama').val(data.bertempat_tinggal_bersama);
                })
            });

            $('body').on('click', '.save-isi-data-siswa', function() {
                // $('.save-isi-data-siswa').attr('disabled', true);

                var form = $('#form-isi-data-siswa');
                form.validate({
                    rules: {
                        nama_lengkap_siswa: {
                            required: true,
                            minlength: 4
                        },
                        tanggal_daftar: {
                            required: true,
                        },
                        kewarganegaraan: {
                            required: true,
                        },
                        agama: {
                            required: true,
                        },
                        banyak_sdr_tiri: {
                            required: true,
                        },
                        bahasa: {
                            required: true,
                            minlength: 4
                        },
                        berat_badan: {
                            required: true,
                        },
                        tanggal_lahir: {
                            required: true,
                        },
                        nama_panggilan: {
                            required: true,
                            minlength: 4
                        },
                        jenis_kelamin: {
                            required: true,
                        },
                        anak_ke: {
                            required: true,
                        },
                        banyak_sdr_angkat: {
                            required: true,
                        },
                        tinggi_badan: {
                            required: true,
                        },
                        golongan_darah: {
                            required: true,
                        },
                        banyak_sdr_kandung: {
                            required: true,
                        },
                        bertempat_tinggal_bersama: {
                            required: true,
                        },
                    },
                    messages: {
                        nama_lengkap_siswa: {
                            required: "mohon untuk disi",
                            minlength: "minimal 4 huruf"
                        },
                        nama_panggilan: {
                            required: "mohon untuk disi",
                            minlength: "minimal 4 huruf"
                        },
                        tanggal_daftar: {
                            required: "mohon untuk disi ",
                        },
                        nama_lengkap_siswa: {
                            required: "mohon untuk disi",
                            minlength: "minimal 4 huruf"
                        },
                        kewarganegaraan: {
                            required: "mohon untuk disi",
                        },
                        agama: {
                            required: "mohon untuk disi",
                            minlength: "minimal 4 huruf"
                        },
                        bahasa: {
                            required: "mohon untuk disi",
                            minlength: "minimal 4 huruf"
                        },
                        berat_badan: {
                            required: "mohon untuk disi",
                            minlength: "minimal 4 huruf"
                        },
                        tanggal_lahir: {
                            required: "mohon untuk disi",
                            minlength: "minimal 4 huruf"
                        },
                        anak_ke: {
                            required: "mohon untuk disi",
                            minlength: "minimal 4 huruf"
                        },
                        banyak_sdr_kandung: {
                            required: "mohon untuk disi",
                            minlength: "minimal 4 huruf"
                        },
                        tinggi_badan: {
                            required: "mohon untuk disi",
                            minlength: "minimal 4 huruf"
                        },
                        golongan_darah: {
                            required: "mohon untuk disi",
                            minlength: "minimal 4 huruf"
                        },
                        banyak_sdr_angkat: {
                            required: "mohon untuk disi",
                            minlength: "minimal 4 huruf"
                        },
                        bertempat_tinggal_bersama: {
                            required: "mohon untuk disi",
                            minlength: "minimal 4 huruf"
                        },
                    },
                });
                if (form.valid()) {
                    $.ajax({
                        data: $('#form-isi-data-siswa').serialize(),
                        url: `{{ route('update-isi-data-siswa') }}`,
                        type: "POST",
                        dataType: 'json',
                        success: function(data) {
                            $('#isi-data-siswa').modal('hide');
                            if (data.success == true) {
                                swal({
                                    icon: "success",
                                    title: 'Berhasil Isi Data Siswa',
                                });
                            } else if (data.success == false) {
                                swal({
                                    icon: "error",
                                    title: 'Terjadi Kesalahan harap hubungi admin',
                                });
                            }
                        },
                        error: function(data) {
                            console.log('Error:', data);
                        }
                    });
                }
            });

            $('body').on('click', '.isi-data-wali', function() {
                $('.save-isi-data-wali').attr('disabled', false);
                $.get(`{{ route('edit-data-wali') }}`, function(data) {
                    $('#isi-data-wali').modal('show');
                    $('#nama_ibu_kandung').val(data.nama_ibu_kandung);
                    $('#nama_ayah_kandung').val(data.nama_ayah_kandung);
                    $('#nomor_kk').val(data.nomor_kk);
                    $('#alamat').val(data.alamat);
                    $('#agama').val(data.agama);
                    $('#nomor_handphone_ibu').val(data.nomor_handphone_ibu);
                    $('#nomor_handphone_ayah').val(data.nomor_handphone_ayah);
                    $('#pendidikan_akhir_ayah').val(data.pendidikan_akhir_ayah);
                    $('#pendidikan_akhir_ibu').val(data.pendidikan_akhir_ibu);
                    $('#pekerjaan_ayah').val(data.pekerjaan_ayah);
                    $('#pekerjaan_ibu').val(data.pekerjaan_ibu);
                    $('#hubungan_terhadap_anak').val(data.hubungan_terhadap_anak);
                })
            });

            $('body').on('click', '.save-isi-data-wali', function() {
                var form = $('#form-isi-data-wali');
                form.validate({
                    rules: {
                        nama_ibu_kandung: {
                            required: true,
                            minlength: 4
                        },
                        nama_ayah_kandung: {
                            required: true,
                            minlength: 4
                        },
                        nomor_kk: {
                            required: true,
                            minlength: 4
                        },
                        alamat: {
                            required: true,
                            minlength: 4
                        },
                        agama: {
                            required: true,
                        },
                        nomor_handphone_ibu: {
                            required: true,
                            minlength: 4
                        },
                        nomor_handphone_ayah: {
                            required: true,
                            minlength: 4
                        },
                        pendidikan_akhir_ayah: {
                            required: true,
                        },
                        pendidikan_akhir_ibu: {
                            required: true,
                        },
                        pekerjaan_ayah: {
                            required: true,
                            minlength: 4
                        },
                        pekerjaan_ibu: {
                            required: true,
                            minlength: 4
                        },
                        hubungan_terhadap_anak: {
                            required: true,
                        },
                    },
                    messages: {
                        nama_ibu_kandung: {
                            required: "mohon untuk disi",
                            minlength: "minimal 4 huruf"
                        },
                        nama_ayah_kandung: {
                            required: "mohon untuk disi",
                            minlength: "minimal 4 huruf"
                        },
                        nomor_kk: {
                            required: "mohon untuk disi",
                            minlength: "minimal 4 huruf"
                        },
                        alamat: {
                            required: "mohon untuk disi",
                            minlength: "minimal 4 huruf"
                        },
                        agama: {
                            required: "mohon untuk disi",
                            minlength: "minimal 4 huruf"
                        },
                        nomor_handphone_ibu: {
                            required: "mohon untuk disi",
                            minlength: "minimal 4 huruf"
                        },
                        nomor_handphone_ayah: {
                            required: "mohon untuk disi",
                            minlength: "minimal 4 huruf"
                        },
                        pendidikan_akhir_ayah: {
                            required: "mohon untuk disi",
                            minlength: "minimal 4 huruf"
                        },
                        pendidikan_akhir_ibu: {
                            required: "mohon untuk disi",
                            minlength: "minimal 4 huruf"
                        },
                        pekerjaan_ayah: {
                            required: "mohon untuk disi",
                            minlength: "minimal 4 huruf"
                        },
                        pekerjaan_ibu: {
                            required: "mohon untuk disi",
                            minlength: "minimal 4 huruf"
                        },
                        hubungan_terhadap_anak: {
                            required: "mohon untuk disi",
                            minlength: "minimal 4 huruf"
                        },
                    }
                });

                if (form.valid()) {
                    $.ajax({
                        data: $('#form-isi-data-wali').serialize(),
                        url: `{{ route('update-isi-data-wali') }}`,
                        type: "POST",
                        dataType: 'json',
                        success: function(data) {
                            $('#isi-data-wali').modal('hide');
                            if (data.success == true) {
                                swal({
                                    icon: "success",
                                    title: 'Berhasil Isi Data wali',
                                });
                            } else if (data.success == false) {
                                swal({
                                    icon: "error",
                                    title: 'Terjadi Kesalahan harap hubungi admin',
                                });
                            }
                        },
                        error: function(data) {
                            console.log('Error:', data);
                            $('#saveBtn').html('Save Changes');
                        }
                    });
                }

            });
        })
</script>
@endpush