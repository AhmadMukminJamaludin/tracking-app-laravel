@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
@endsection

@section('content')
<!-- Main Content -->
<div class="main-content">
<section class="section">
    <div class="section-header">
        <h1>Detail Pengajuan Kredit</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="{{ route('pengajuan-kredit.index') }}">Data Pengajuan Kredit</a></div>
            <div class="breadcrumb-item active">Detail Pengajuan</div>
        </div>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Detail Pengajuan Kredit</h4>
            </div>
            <div class="card-body">
                @foreach ($kredit as $item)                
                    <input type="hidden" name="id" id="id" value="{{ $item->id }}">
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Nama lengkap</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="name" id="" required value="{{ $item->name }}" disabled>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-3 col-form-label">Tempat/Tanggal Lahir</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="tempat_lahir" id="" required value="{{ $item->tempat_lahir }}" disabled>
                        </div>
                        <div class="col-sm-3">
                            <input type="text" class="form-control datepicker" name="tanggal_lahir" id="date" required value="{{ $item->tanggal_lahir }}" disabled>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Telepon</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" name="phone" id="" required value="{{ $item->phone }}" disabled>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">No.KTP</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" name="no_ktp" id="" required value="{{ $item->no_ktp }}" disabled>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">NPWP</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" name="npwp" id="" value="{{ $item->npwp }}" disabled>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Kewarganegaraan</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="kewarganegaraan" id="" required value="{{ $item->kewarganegaraan }}" disabled>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Provinsi</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="provinsi" id="" required value="{{ $item->provinsi }}" disabled>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-9">
                            <select name="gender" id="" class="form-control" disabled>
                                <option>Pilih Jenis Kelamin</option>
                                <option value="laki-laki" {{ $item->gender == 'laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                                <option value="perempuan" {{ $item->gender == 'perempuan' ? 'selected' : '' }}>Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Status Perkawinan</label disabled>
                        <div class="col-sm-9">
                            <select name="status" id="" class="form-control" disabled>
                                <option>Pilih Status Perkawinan</option>
                                <option value="menikah" {{ $item->status == 'menikah' ? 'selected' : '' }}>Menikah</option>
                                <option value="lajang" {{ $item->status == 'lajang' ? 'selected' : '' }}>Lajang</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Nama Ibu Kandung</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="nama_ibu" id="" required value="{{ $item->nama_ibu }}" disabled>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Alamat Sesuai Identitas</label>
                        <div class="col-sm-9">
                            <textarea name="alamat_identitas" id="" cols="30" rows="10" class="form-control" required disabled>{{ $item->alamat_identitas }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Alamat Terkini</label>
                        <div class="col-sm-9">
                            <textarea name="alamat_terkini" id="" cols="30" rows="10" class="form-control" required disabled>{{ $item->alamat_terkini }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Jumlah Permohonan</label>
                        <div class="col-sm-9">
                            <input type="number" name="jumlah_permohonan" id="" class="form-control" required disabled value="{{ $item->jumlah_permohonan }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Tujuan Penggunaan</label>
                        <div class="col-sm-9">
                            <input type="text" name="tujuan_penggunaan" id="" class="form-control" required disabled value="{{ $item->tujuan_penggunaan }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Keterangan Penggunaan</label>
                        <div class="col-sm-9">
                            <textarea name="ket_penggunaan" id="" class="form-control" cols="30" rows="10" disabled>{{ $item->ket_penggunaan }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Jangka waktu</label>
                        <div class="col-sm-9">
                            <input type="text" name="jangka_waktu" id="" class="form-control" required disabled value="{{ $item->jangka_waktu }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Jaminan Kredit</label>
                        <div class="col-sm-9">
                            <textarea name="jaminan_kredit" class="form-control" id="" cols="30" rows="10" disabled>{{ $item->jaminan_kredit }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Posisi Jaminan</label>
                        <div class="col-sm-9">
                            <select name="posisi_jaminan" class="form-control" id="" disabled>
                                <option>Pilih Posisi Jaminan</option>
                                <option value="sedang dijaminkan" {{ $item->posisi_jaminan == 'sedang dijaminkan' ? 'selected' : '' }}>sedang dijaminkan</option>
                                <option value="tidak sedang dijaminkan" {{ $item->posisi_jaminan == 'tidak sedang dijaminkan' ? 'selected' : '' }}>tidak sedang dijaminkan</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Status Jaminan</label>
                        <div class="col-sm-9">
                            <select name="status_jaminan" class="form-control" id="" disabled>
                                <option>Pilih Status Jaminan</option>
                                <option value="milik keluarga" {{ $item->status_jaminan == 'milik keluarga' ? 'selected' : '' }}>milik keluarga</option>
                                <option value="milik sendiri" {{ $item->status_jaminan == 'milik sendiri' ? 'selected' : '' }}>milik sendiri</option>
                                <option value="milik orang lain" {{ $item->status_jaminan == 'milik orang lain' ? 'selected' : '' }}>milik orang lain</option>
                            </select>
                        </div>
                    </div>
                    <hr>
                    <table class="table table-bordered table-responsive">
                        <thead>
                            <tr>
                                <th>Berkas</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($item->berkas as $item)
                            <tr>
                                <td>Nama file dalam server: {{ $item->file_name }}</td>
                                <td>
                                    <a href="{{ asset('berkas/'.$item->file_name) }}" class="btn btn-icon btn-primary"><i class="fas fa-file-download"></i> Download</a> 
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endforeach
            </div>
        </div>
    </div>
</section>
</div> 
@endsection