<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.includes.head')
    @yield('page-css')
</head>
<body>
<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    @include('admin.includes.header')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_settings-panel.html -->
        @include('admin.includes.color-settings')
        @include('admin.includes.todo-list-plus-chat-bar')
        <!-- partial -->
        <!-- partial:partials/_sidebar.html -->
        @include('admin.includes.menu')
        <!-- partial -->
        <div class="main-panel">
            @yield('content')
        <!-- partial:partials/_footer.html -->
            @include('admin.includes.footer')
            <!-- partial -->
        </div>
        <!-- content-wrapper ends -->
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->

<!-- plugins:js -->
<script src="{{asset("assets/vendors/js/vendor.bundle.base.js")}}"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="{{asset("assets/vendors/chart.js/Chart.min.js")}}"></script>
<script src="{{asset("assets/vendors/datatables.net/jquery.dataTables.js")}}"></script>
<script src="{{asset("assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js")}}"></script>
<script src="{{asset("assets/js/dataTables.select.min.js")}}"></script>

<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="{{asset("assets/js/off-canvas.js")}}"></script>
<script src="{{asset("assets/js/hoverable-collapse.js")}}"></script>
<script src="{{asset("assets/js/template.js")}}"></script>
<script src="{{asset("assets/js/settings.js")}}"></script>
<script src="{{asset("assets/js/todolist.js")}}"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="{{asset("assets/js/dashboard.js")}}"></script>
<script src="{{asset("assets/js/Chart.roundedBarCharts.js")}}"></script>
@yield('page-js')
<!-- End custom js for this page-->
</body>

</html>

