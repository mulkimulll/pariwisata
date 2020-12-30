@extends('layouts.admin.index')

@section('page-header')
    <h1 class="page-header">Dashboard</h1>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-map fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">{{ $pa->wisata }}</div>
                            <div>Destinasi Wisata</div>
                        </div>
                    </div>
                </div>
                <a href="{{ route('ListDestinasi') }}">
                    <div class="panel-footer">
                        <span class="pull-left">Lihat Detail Destinasi</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-green">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-list-ol fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">{{ $k->kategori }}</div>
                            <div>Kategori</div>
                        </div>
                    </div>
                </div>
                <a href="{{ route('kategori') }}">
                    <div class="panel-footer">
                        <span class="pull-left">Lihat Detail Kategori</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-yellow">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-hotel fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">{{ $p->penginapan }}</div>
                            <div>Penginapan</div>
                        </div>
                    </div>
                </div>
                <a href="{{ route('penginapan') }}">
                    <div class="panel-footer">
                        <span class="pull-left">Lihat Detail Penginapan</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-red">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-bus fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">{{ $t->transportasi }}</div>
                            <div>Transportasi</div>
                        </div>
                    </div>
                </div>
                <a href="{{ route('transportasi') }}">
                    <div class="panel-footer">
                        <span class="pull-left">Lihat Detail Transportasi</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection