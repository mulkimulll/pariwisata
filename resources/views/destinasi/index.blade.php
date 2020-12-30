@extends('layouts.admin.index')

@section('page-header')
    <h1 class="page-header">Destinasi Wisata</h1>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                Tambah Destinasi Wisata
            </div>
            <div class="panel-body">
                <form enctype="multipart/form-data" role="form" action="{{ url('input-dest') }}" method="POST">
                    <div class="row">
                        <div class="col-lg-6">
                            @csrf
                            <div class="form-group">
                                <label>Nama Destinasi Wisata</label>
                                <input class="form-control" name="nama_destinasi" id="nama_destinasi">                                
                            </div>
                            <div class="form-group">
                                <label>Kategori Wisata</label>
                                <select class="form-control" name="id_kategori" id="id_kategori">
                                    <option>-- Pilih --</option>
                                    @foreach ($r as $item)
                                        <option value="{{ $item->id_kategori }}">{{ $item->nama_kategori }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Alamat Destinasi Wisata</label>
                                <input class="form-control" name="alamat" id="alamat">                                
                            </div>                                               
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Isi/keterangan Destinasi</label>
                                <textarea name="isi_destinasi" cols="51" rows="10" placeholder="Ketik Disini ..."></textarea>
                            </div>
                            <div class="form-group">
                                <label for="gambar">Galeri/Gambar</label>
                                <input type="file" name="gambar" id="gambar" placeholder="ketik" autocomplete="off" class="form-control-file">
                            </div>
                        </div>                        
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>      
                </form>
                <!-- /.row (nested) -->
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
@endsection