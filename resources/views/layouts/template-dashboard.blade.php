<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('dashboard/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/vendor/fonts/circular-std/style.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/libs/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/vendor/fonts/fontawesome/css/fontawesome-all.css') }}">

    <!-- chart -->
    <link rel="stylesheet" href="{{ asset('dashboard/vendor/charts/chartist-bundle/chartist.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/vendor/charts/morris-bundle/morris.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/vendor/charts/c3charts/c3.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/vendor/fonts/flag-icon-css/flag-icon.min.css') }}">

    <!-- table -->
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/vendor/datatables/css/dataTables.bootstrap4.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/vendor/datatables/css/buttons.bootstrap4.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/vendor/datatables/css/select.bootstrap4.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/vendor/datatables/css/fixedHeader.bootstrap4.css') }}">
    <title>Dashboard InviteAja</title>
</head>

<body> 
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
         <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        @yield('navbar-top')
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        @yield('navbar-side')
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            @yield('content')
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
        <div class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl col-lg col-md col-sm col">
                            <p class="text-right">Copyright © 2018 Concept. All rights reserved. Dashboard by <a href="https://colorlib.com/wp/">Colorlib</a>.</p>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 -->
    <script src="{{ asset('dashboard/vendor/jquery/jquery-3.3.1.min.js') }}"></script>
    <!-- bootstap bundle js -->
    <script src="{{ asset('dashboard/vendor/bootstrap/js/bootstrap.bundle.js') }}"></script>
    <!-- slimscroll js -->
    <script src="{{ asset('dashboard/vendor/slimscroll/jquery.slimscroll.js') }}"></script>
    <!-- main js -->
    <script src="{{ asset('dashboard/libs/js/main-js.js') }}"></script>
    
    <!-- ======================================= chart ======================================= -->
    <!-- chart chartist js -->
    <script src="{{ asset('dashboard/vendor/charts/chartist-bundle/chartist.min.js') }}"></script>
    <!-- sparkline js -->
    <script src="{{ asset('dashboard/vendor/charts/sparkline/jquery.sparkline.js') }}"></script>
    <!-- morris js -->
    <script src="{{ asset('dashboard/vendor/charts/morris-bundle/raphael.min.js') }}"></script>
    <script src="{{ asset('dashboard/vendor/charts/morris-bundle/morris.js') }}"></script>
    <!-- chart c3 js -->
    <script src="{{ asset('dashboard/vendor/charts/c3charts/c3.min.js') }}"></script>
    <script src="{{ asset('dashboard/vendor/charts/c3charts/d3-5.4.0.min.js') }}"></script>
    <script src="{{ asset('dashboard/vendor/charts/c3charts/C3chartjs.js') }}"></script>
    <script src="{{ asset('dashboard/libs/js/dashboard-ecommerce.js') }}"></script>

    <!-- ============================================ Table ============================================ -->
    <script src="{{ asset('dashboard/vendor/multi-select/js/jquery.multi-select.js') }}"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('dashboard/vendor/datatables/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
    <script src="{{ asset('dashboard/vendor/datatables/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('dashboard/vendor/datatables/js/data-table.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.datatables.net/rowgroup/1.0.4/js/dataTables.rowGroup.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.2.7/js/dataTables.select.min.js"></script>
    <script src="https://cdn.datatables.net/fixedheader/3.1.5/js/dataTables.fixedHeader.min.js"></script>
</body>
 
</html>