<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <title>{{ config('app.name') }}</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('dashboard/vendors/feather/feather.css') }}" />
    <link rel="stylesheet" href="{{ asset('dashboard/vendors/mdi/css/materialdesignicons.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('dashboard/vendors/ti-icons/css/themify-icons.css') }}" />
    <link rel="stylesheet" href="{{ asset('dashboard/vendors/typicons/typicons.css') }}" />
    <link
      rel="stylesheet"
      href="{{ asset('dashboard/vendors/simple-line-icons/css/simple-line-icons.css') }}"
    />
    <link rel="stylesheet" href="{{ asset('dashboard/vendors/css/vendor.bundle.base.css') }}" />
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link
      rel="stylesheet"
      href="{{ asset('dashboard/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}"
    />
    <link rel="stylesheet" href="{{ asset('dashboard/js/select.dataTables.min.css') }}" />
    <!-- End plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('dashboard/vendors/select2/select2.min.css') }}" />
    <link
      rel="stylesheet"
      href="{{ asset('dashboard/vendors/select2-bootstrap-theme/select2-bootstrap.min.css') }}"
    />
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('dashboard/css/vertical-layout-light/style.css') }}" />
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('dashboard/images/favicon.png') }}" />

    {{-- DATATABLE --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"/>
    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">

  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->

      @include('layouts.dashboard.navigation')

      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_settings-panel.html -->

        @include('layouts.dashboard.theme-setting')

        <!-- partial -->
        <!-- partial:partials/_sidebar.html -->

        @include('layouts.dashboard.sidebar')

        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">

            {{ $slot }}

          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->

          @include('layouts.dashboard.footer')

          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <!-- plugins:js -->
    <script src="{{ asset('dashboard/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset('dashboard/vendors/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('dashboard/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('dashboard/vendors/progressbar.js/progressbar.min.js') }}"></script>

    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('dashboard/js/off-canvas.js') }}"></script>
    <script src="{{ asset('dashboard/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('dashboard/js/template.js') }}"></script>
    <script src="{{ asset('dashboard/js/settings.js') }}"></script>
    <script src="{{ asset('dashboard/js/todolist.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{ asset('dashboard/js/jquery.cookie.js') }}" type="text/javascript"></script>
    <script src="{{ asset('dashboard/js/dashboard.js') }}"></script>
    <script src="{{ asset('dashboard/js/Chart.roundedBarCharts.js') }}"></script>
    <!-- End custom js for this page-->

    <script src="{{ asset('dashboard/js/file-upload.js') }}"></script>
    <script src="{{ asset('dashboard/js/typeahead.js') }}"></script>
    <script src="{{ asset('dashboard/js/select2.js') }}"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>

    {{-- <script type="text/javascript">
      $(document).ready(function () {

        $.fn.dataTable.ext.errMode = 'throw';
        
        let table =  $('#datatable').DataTable({
          processing: true,
          serverSide: true,
          ajax: "{{ route('product.data') }}",
          columns: [
              {data: 'DT_RowIndex', name: 'DT_RowIndex'},
              {data: 'name', name: 'name'},
              {data: 'description', name: 'description'},
              {data: 'action', name: 'action', orderable: true, searchable: true},
          ]
        });
        
      });
    </script> --}}
  </body>
</html>
