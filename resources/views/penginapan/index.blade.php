@extends('layouts.admin.index')

@section('page-header')
    <h1 class="page-header">Kelola Penginapan</h1>    
@endsection

@section('content')
    <div class="row">
        <div class="col-md-4">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    Tambah Penginapan
                </div>
                <div class="panel-body">
                    <div class="col-md-12">
                        <form enctype="multipart/form-data" method="POST" action="{{ url('/input-penginapan') }}">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="nama">Nama Penginapan</label>
                                <input type="text" class="form-control" name="nama" id="nama"
                                    autocomplete="off" required>
                            </div>
                            <div class="form-group">
                                <label for="nama">Alamat</label>
                                <input type="text" class="form-control" name="alamat" id="alamat"
                                    autocomplete="off" required>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="telp">Telp</label>
                                        <input type="text" class="form-control" name="telp" id="telp"
                                            autocomplete="off" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="bintang_hotel">Bintang</label>
                                        <input type="number" class="form-control" name="bintang_hotel" id="bintang_hotel"
                                            autocomplete="off" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="tarif">Tarif</label>
                                <input type="text" class="form-control" name="tarif" id="tarif"
                                    autocomplete="off" required value="Rp.">
                            </div>
                            <div class="form-group">
                                <label for="gambar">Foto Hotel</label>
                                <input type="file" name="gambar" id="gambar" placeholder="ketik" autocomplete="off" class="form-control-file">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-sm btn-success" name="simpan"><i class="fa fa-pen"></i>
                                    Simpan</button>                                
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    Tabel Penginapan                    
                </div>
                <div class="panel-body">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Gambar</th>
                                        <th>Penginapan</th>
                                        <th>Tarif</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($r as $item)
                                        <tr>
                                            <td class="text-center"><img src="{{ asset('/images/penginapan/'.$item->gambar) }}" height="100px" width="100px"</td>                                        
                                            <td>
                                                {{ $item->nama }} <br>
                                                {{ $item->alamat }} <br>                                            
                                                {{ $item->bintang_hotel }}
                                            </td>    
                                            <td class="text-center">
                                                <a href="{{ url('/updt-bupati/'.$item->id_bupati) }}" class="btn btn-sm btn-info"><i class="fa fa-pen"></i> Ubah</a>
                                                <a href="{{ url('/dtl-bupati/'.$item->id_bupati) }}" class="btn btn-sm btn-warning"><i class="fa fa-eye"></i> Detail</a>
                                                <a href="{{ url('/del-bupati/'.$item->id_bupati) }}" class="btn btn-sm btn-danger" onclick="return confirm('apakah anda yakin?')"><i class="fa fa-trash"></i> Hapus</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection