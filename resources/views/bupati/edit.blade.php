@extends('layouts.admin.index')

@section('page-header')
<h1 class="page-header">Ubah Profil Bupati Pandeglang</h1>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                Ubah Bupati {{ $r->nama_bupati }}
            </div>
            <div class="panel-body">
                <div class="col-md-12">
                    <form enctype="multipart/form-data" method="POST" action="{{ url('/updt-bupati-proses/'.$r->id_bupati) }}">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="nama_bupati">Nama Bupati</label>
                            <input type="text" class="form-control" name="nama_bupati" id="nama_bupati"
                                autocomplete="off" value="{{ $r->nama_bupati }}" required>
                        </div>
                        <div class="form-group">
                            <label>Keterangan Bupati</label>
                            <textarea name="keterangan" id="keterangan" cols="51" rows="10" placeholder="Ketik Disini ...">{{ $r->keterangan }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="gambar">Foto awal</label>
                            <p><img src="{{ asset('/images/bupati/'.$r->gambar) }}" height="100px" width="100px" ></p><br>
                            <p>klik dibawah untuk ubah foto</p>
                            <input type="file" name="gambar" id="gambar" placeholder="ketik" autocomplete="off"
                                class="form-control-file" value="{{ $r->gambar }}">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-sm btn-success" name="ubah"><i class="fa fa-pen"></i>
                                Ubah</button>
                            <button type="reset" class="btn btn-sm btn-danger"><i class="fa fa-times"></i>
                                Batal</button>
                            <a href="{{ url('/bupati') }}" class="btn btn-sm btn-secondary"><i
                                    class="fa fa-reply"></i> Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
