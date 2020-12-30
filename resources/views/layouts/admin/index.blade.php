<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ADMIN PARIWISATA PANDEGLANG</title>

        <!-- Bootstrap Core CSS -->
        <link href="{{asset('admin/css/bootstrap.min.css')}}" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="{{asset('admin/css/metisMenu.min.css')}}" rel="stylesheet">

        <!-- Timeline CSS -->
        <link href="{{asset('admin/css/timeline.css')}}" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="{{asset('admin/css/startmin.css')}}" rel="stylesheet">

        <!-- Morris Charts CSS -->
        <link href="{{asset('admin/css/morris.css')}}" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="{{asset('admin/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
        
        <!-- DataTables CSS -->
        <link href="{{asset('admin/css/dataTables/dataTables.bootstrap.css')}}" rel="stylesheet">

        <!-- DataTables Responsive CSS -->
        <link href="{{asset('admin/css/dataTables/dataTables.responsive.css')}}" rel="stylesheet">
    </head>
    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                @include('layouts.admin.header')
                <!-- /.navbar-top-links -->

                @include('layouts.admin.sidebar')
            </nav>

            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            {{-- <h1 class="page-header">Dashboard</h1> --}}
                            @yield('page-header')
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        @yield('content')
                    </div>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="{{asset('admin/js/jquery.min.js')}}"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="{{asset('admin/js/bootstrap.min.js')}}"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="{{asset('admin/js/metisMenu.min.js')}}"></script>

        <!-- Morris Charts JavaScript -->
        <script src="{{asset('admin/js/raphael.min.js')}}"></script>

        <!-- Custom Theme JavaScript -->
        <script src="{{asset('admin/js/startmin.js')}}"></script>

        <!-- DataTables JavaScript -->
        <script src="{{asset('admin/js/dataTables/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('admin/js/dataTables/dataTables.bootstrap.min.js')}}"></script>

        <script>
            $(document).ready(function() {
                $('#dataTables-example').DataTable({
                        responsive: true
                });
            });
        </script>
    </body>
</html>
