@extends('layouts.admin.index')

@section('page-header')
<h1 class="page-header">Ubah Kategori Wisata</h1>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                Ubah Kategori Wisata {{ $t->nama_kategori }}
            </div>
            <div class="panel-body">
                <div class="col-md-12">
                    <form enctype="multipart/form-data" method="POST" action="{{ url('/updt-kategori-proses/'.$t->id_kategori) }}">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="nama_kategori">Nama Kategori Wisata</label>
                            <input type="text" class="form-control" name="nama_kategori" id="nama_kategori"
                                autocomplete="off" value="{{ $t->nama_kategori }}" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-sm btn-success" name="ubah"><i class="fa fa-pen"></i>
                                Ubah</button>
                            <button type="reset" class="btn btn-sm btn-danger"><i class="fa fa-times"></i>
                                Batal</button>
                            <a href="{{ url('/kategori') }}" class="btn btn-sm btn-secondary"><i
                                    class="fa fa-reply"></i> Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
