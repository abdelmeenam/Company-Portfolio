</div>

<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
<script src="{{ asset('AdminAssets/assets/js/libs/jquery-3.1.1.min.js')}}"></script>
<script src="{{ asset('AdminAssets/bootstrap/js/popper.min.js')}}"></script>
<script src="{{ asset('AdminAssets/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('AdminAssets/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
<script src="{{ asset('AdminAssets/assets/js/app.js')}}"></script>
<script>
    $(document).ready(function() {
        App.init();
    });
</script>
<script src="{{ asset('AdminAssets/assets/js/custom.js')}}"></script>

<script src="{{ asset('AdminAssets/plugins/apex/apexcharts.min.js')}}"></script>
<script src="{{ asset('AdminAssets/assets/js/dashboard/dash_1.js')}}"></script>
@include('sweetalert::alert')

</body>
</html>
