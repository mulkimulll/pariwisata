@extends('layouts.admin.index')

@section('page-header')
    <h1 class="page-header">Detail Wisata</h1>    
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    {{ $r->nama_destinasi }}
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-6">
                            <p><img src="{{ asset('/images/large/'.$r->gambar) }}" class="img-thumbnail mb-4"></p>
                        </div>
                        <div class="col-md-6">
                            <p><strong>Nama Destinasi :</strong>&nbsp; {{ $r->nama_destinasi }} </p><br>                
                            <p><strong>Alamat :</strong>&nbsp; {{ $r->alamat }} </p><br>                
                            <p><strong>Kategori :</strong>&nbsp; {{ $r->nama_kategori }} </p><br>                
                            <p><strong>Keterangan :</strong>&nbsp; {{ $r->isi_destinasi }} </p>
                        </div>
                    </div>                                        
                </div>
                <div class="panel-footer">
                   Dibuat Tanggal :&nbsp; {{ $r->created_at }}
                </div>
            </div>  
        </div>
    </div>
@endsection