@extends('layouts.admin.index')

@section('page-header')
<h1 class="page-header">Ubah Destinasi</h1>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                Ubah Destinasi Wisata {{ $r->nama_destinasi }}
            </div>
            <div class="panel-body">
                <div class="col-md-12">
                    <form enctype="multipart/form-data" method="POST" action="{{ url('/updt-dest-proses/'.$r->id_destinasi) }}">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="nama_destinasi">Nama Destinasi Wisata</label>
                            <input type="text" class="form-control" name="nama_destinasi" id="nama_destinasi"
                                autocomplete="off" value="{{ $r->nama_destinasi }}" required>
                        </div>
                        <div class="form-group">
                            <label for="id_kategori">Kategori Wisata</label>
                            <select name="id_kategori" id="id_kategori" class="form-control" required>
                                @foreach ($t as $item)
                                <option value="{{ $item->id_kategori }}">{{ $item->nama_kategori }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat Destinasi Wisata</label>
                            <input type="text" class="form-control" name="alamat" id="alamat"
                                autocomplete="off" value="{{ $r->alamat }}" required>
                        </div>
                        <div class="form-group">
                            <label>Isi/keterangan Destinasi</label>
                            <textarea name="isi_destinasi" id="isi_destinasi" cols="51" rows="10" placeholder="Ketik Disini ...">{{ $r->isi_destinasi }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="gambar">Foto awal</label>
                            <p><img src="{{ asset('/images/large/'.$r->gambar) }}" height="100px" width="100px" ></p><br>
                            <p>klik dibawah untuk ubah foto</p>
                            <input type="file" name="gambar" id="gambar" placeholder="ketik" autocomplete="off"
                                class="form-control-file" value="{{ $r->gambar }}">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-sm btn-success" name="ubah"><i class="fa fa-pen"></i>
                                Ubah</button>
                            <button type="reset" class="btn btn-sm btn-danger"><i class="fa fa-times"></i>
                                Batal</button>
                            <a href="{{ url('/daftar-destinasi') }}" class="btn btn-sm btn-secondary"><i
                                    class="fa fa-reply"></i> Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
