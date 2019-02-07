<!-- Javascript -->
<script src="{{ asset('assets/backend') }}/vendor/jquery/jquery.min.js"></script>
<script src="{{ asset('assets/backend') }}/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="{{ asset('assets/backend') }}/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="{{ asset('assets/backend') }}/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
<script src="{{ asset('assets/backend') }}/vendor/chartist/js/chartist.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
@stack('js')
<script src="{{ asset('assets/backend') }}/scripts/klorofil-common.js"></script>
<script>
    $(document).ready(function () {
        $('#myTable').DataTable();
    });
</script>
<script>
    @if($errors->any())
        @foreach($errors->all() as $error)
            toastr.error('{{ $error }}', 'Access denied!', {
                closeButton: true,
                progressBar: true,
            });
        @endforeach
    @endif
</script>
{!! Toastr::message() !!}
</body>

</html>
