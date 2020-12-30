@extends('layouts.admin.index')

@section('page-header')
    <h1 class="page-header">Destinasi Wisata</h1>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            @if(Session::has('message'))
                <div class="alert alert-success alert-dismissible">                            
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <strong>{{ session('message') }}</strong>
                </div>     
            @endif      
            <div class="panel panel-primary">
                <div class="panel-heading">
                    Daftar Destinasi Wisata                    
                </div>
                <div class="panel-body">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Kategori</th>
                                        <th>Alamat Destinasi</th>
                                        {{-- <th>Isi/Keterangan</th> --}}
                                        <th>Gambar</th>
                                        <th>Tgl. Dibuat</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($r as $item)
                                        <tr>
                                            <td>{{ $item->nama_destinasi }}</td>
                                            <td>{{ $item->nama_kategori }}</td>
                                            <td>{{ $item->alamat }}</td>
                                            {{-- <td>{{ $item->isi_destinasi }}</td> --}}
                                            <td>{{ $item->gambar }}</td>                                            
                                            <td>{{ $item->created_at }}</td>                                            
                                            <td>
                                                <a href="{{ url('/updt-dest/'.$item->id_destinasi) }}" class="btn btn-sm btn-info"><i class="fa fa-pen"></i> Ubah</a>
                                                <a href="{{ url('/dtl-dest/'.$item->id_destinasi) }}" class="btn btn-sm btn-warning"><i class="fa fa-eye"></i> Detail</a>
                                                <a href="{{ url('/del-dest/'.$item->id_destinasi) }}" class="btn btn-sm btn-danger" onclick="return confirm('apakah anda yakin?')"><i class="fa fa-trash"></i> Hapus</a>
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
