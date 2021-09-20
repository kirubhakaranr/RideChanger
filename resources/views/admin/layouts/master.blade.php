<!DOCTYPE html>
<html class="loading semi-dark-layout" lang="en" data-layout="semi-dark-layout" data-textdirection="ltr">
    <!-- BEGIN: Head-->

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui" />
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta name="author" content="" />

        <title>Dashboard - Invest In Shares</title>
        <link rel="apple-touch-icon" href="{{  asset('app-assets/images/ico/apple-icon-120.png') }}" />
        <link rel="shortcut icon" type="image/x-icon" href="{{  asset('app-assets/images/ico/favicon.ico') }}" />
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet" />

        <!-- BEGIN: Vendor CSS-->
        <link rel="stylesheet" type="text/css" href="{{  asset('app-assets/vendors/css/vendors.min.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{  asset('app-assets/vendors/css/charts/apexcharts.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{  asset('app-assets/vendors/css/tables/datatable/dataTables.bootstrap4.min.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{  asset('app-assets/vendors/css/tables/datatable/responsive.bootstrap4.min.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{  asset('app-assets/vendors/css/tables/datatable/buttons.bootstrap4.min.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{  asset('app-assets/vendors/css/tables/datatable/rowGroup.bootstrap4.min.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{  asset('app-assets/vendors/css/pickers/flatpickr/flatpickr.min.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{  asset('app-assets/vendors/css/forms/select/select2.min.css')}}" />
        <!-- END: Vendor CSS-->

        <!-- BEGIN: Theme CSS-->
        <link rel="stylesheet" type="text/css" href="{{  asset('app-assets/css/bootstrap.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{  asset('app-assets/css/bootstrap-extended.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{  asset('app-assets/css/colors.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{  asset('app-assets/css/components.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{  asset('app-assets/css/themes/dark-layout.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{  asset('app-assets/css/themes/bordered-layout.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{  asset('app-assets/css/themes/semi-dark-layout.css')}}" />

        <!-- BEGIN: Page CSS-->
        @yield('css')
        <!-- END: Page CSS-->

        <!-- BEGIN: Custom CSS-->
        <link rel="stylesheet" type="text/css" href="{{  asset('assets/css/style.css')}}" />
        <!-- END: Custom CSS-->
    </head>
    <!-- END: Head-->

    <!-- BEGIN: Body-->

    <body class="vertical-layout vertical-menu-modern navbar-floating footer-static" data-open="click" data-menu="vertical-menu-modern" data-col="">


            @include('admin.layouts.topbar')
            @include('admin.layouts.sidebar')

        @yield('content')


            @include('admin.layouts.footer')

	   <!-- BEGIN: Vendor JS-->
       <script src="{{  asset('app-assets/vendors/js/vendors.min.js') }}"></script>
       <script src="{{  asset('app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js') }}"></script>
       <script src="{{  asset('app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js') }}"></script>
       <script src="{{  asset('app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js') }}"></script>
       <script src="{{  asset('app-assets/vendors/js/tables/datatable/responsive.bootstrap4.js') }}"></script>
       <script src="{{  asset('app-assets/vendors/js/tables/datatable/datatables.checkboxes.min.js') }}"></script>
       <script src="{{  asset('app-assets/vendors/js/tables/datatable/datatables.buttons.min.js') }}"></script>
       <script src="{{  asset('app-assets/vendors/js/tables/datatable/jszip.min.js') }}"></script>
       <script src="{{  asset('app-assets/vendors/js/tables/datatable/pdfmake.min.js') }}"></script>
       <script src="{{  asset('app-assets/vendors/js/tables/datatable/vfs_fonts.js') }}"></script>
       <script src="{{  asset('app-assets/vendors/js/tables/datatable/buttons.html5.min.js') }}"></script>
       <script src="{{  asset('app-assets/vendors/js/tables/datatable/buttons.print.min.js') }}"></script>
       <script src="{{  asset('app-assets/vendors/js/tables/datatable/dataTables.rowGroup.min.js') }}"></script>
       <script src="{{  asset('app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js') }}"></script>
       <script src="{{  asset('app-assets/vendors/js/forms/select/select2.full.min.js') }}"></script>
       <script src="{{  asset('app-assets/vendors/js/charts/apexcharts.min.js') }}"></script>
       <script src="{{  asset('app-assets/vendors/js/extensions/toastr.min.js') }}"></script>
       <!-- BEGIN Vendor JS-->

       <!-- BEGIN: Page Vendor JS-->
       <!-- END: Page Vendor JS-->

       <!-- BEGIN: Theme JS-->
       <script src="{{  asset('app-assets/js/core/app-menu.js') }}"></script>
       <script src="{{  asset('app-assets/js/core/app.js') }}"></script>
       <script src="{{  asset('app-assets/js/scripts/customizer.min.js') }}"></script>
       <!-- END: Theme JS-->

       <script src="{{  asset('app-assets/vendors/js/editors/ckeditor5-build-classic/ckeditor.js') }}"></script>

       <!-- BEGIN: Page JS-->
        @yield('javascript')
       <!-- END: Page JS-->

       <script>
           $(window).on("load", function () {
               if (feather) {
                   feather.replace({
                       width: 14,
                       height: 14,
                   });
               }
           });

           $(".datatables-basic").DataTable({
            "aaSorting": [],
           });
           var dropdownMenuIcon = $(".dropdown-icon-wrapper .dropdown-item");

           // For Dropdown With Icons
           dropdownMenuIcon.on("click", function () {
               $(".dropdown-icon-wrapper .dropdown-toggle svg").remove();
               $(this).find("svg").clone().appendTo(".dropdown-icon-wrapper .dropdown-toggle");
               $(".dropdown-icon-wrapper .dropdown-toggle .dropdown-item").removeClass("dropdown-item");
           });

           $(".select2-form").select2({
               placeholder: "Select Option",
               allowClear: true,
           });

           $(function () {
                ClassicEditor.create( document.querySelector( '.ckeditor' ) )
            })
       </script>
   </body>
   <!-- END: Body-->
</html>
