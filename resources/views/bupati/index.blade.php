@extends('layouts.admin.index')

@section('page-header')
    <h1 class="page-header">Kelola Bupati</h1>    
@endsection

@section('content')
    <div class="row">
        {{-- <div class="col-md-4">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    Tambah Bupati
                </div>
                <div class="panel-body">
                    <div class="col-md-12">
                        <form enctype="multipart/form-data" method="POST" action="{{ url('/input-bupati') }}">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="nama_bupati">Nama Bupati</label>
                                <input type="text" class="form-control" name="nama_bupati" id="nama_bupati"
                                    autocomplete="off" required>
                            </div>
                            <div class="form-group">
                                <label>Isi/keterangan Bupati</label>
                                <textarea name="keterangan" cols="35" rows="10" placeholder="Ketik Disini ..."></textarea>
                            </div>
                            <div class="form-group">
                                <label for="gambar">Foto Bupati</label>
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
        </div> --}}
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    Tabel Bupati                    
                </div>
                <div class="panel-body">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Gambar</th>
                                        <th>Nama Bupati</th>
                                        <th class="text-right">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($r as $item)
                                        <tr>
                                            <td class="text-center"><img src="{{ asset('/images/bupati/'.$item->gambar) }}" height="100px" width="100px"</td>                                        
                                            <td>{{ $item->nama_bupati }}</td>    
                                            <td class="text-right">
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