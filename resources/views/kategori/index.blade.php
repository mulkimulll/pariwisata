@extends('layouts.admin.index')

@section('page-header')
    <h1 class="page-header">Kategori Wisata</h1>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-4">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    Kategori
                </div>
                <div class="panel-body">
                    <div class="col-md-12">
                        <form method="POST" action="{{ url('/input-kategori') }}">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="nama_destinasi">Nama Kategori</label>
                                <input type="text" class="form-control" name="nama_kategori" id="nama_kategori"
                                    autocomplete="off" required>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-sm btn-success" name="ubah"><i class="fa fa-pen"></i>
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
                    Tabel Kategori
                </div>
                <div class="panel-body">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Nama Kategori</th>
                                        <th>Tgl. Buat</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($r as $item)
                                        <tr>
                                            <td>{{ $item->nama_kategori }}</td>                               
                                            <td>{{ $item->created_at }}</td>                                            
                                            <td class="text-center">
                                                <a href="{{ url('/updt-kategori/'.$item->id_kategori) }}" class="btn btn-sm btn-info"><i class="fa fa-pen"></i> Ubah</a>
                                                <a href="{{ url('/del-kategori/'.$item->id_kategori) }}" class="btn btn-sm btn-danger" onclick="return confirm('apakah anda yakin?')"><i class="fa fa-trash"></i> Hapus</a>
                                                {{-- <a href="{{ url('/dtl-kategori/'.$item->id_kategori) }}" class="btn btn-sm btn-warning"><i class="fa fa-eye"></i> Detail</a> --}}
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