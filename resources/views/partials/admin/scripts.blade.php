<!--   Core JS Files   -->
<script src="/fe/admin/js/core/jquery.min.js"></script>
<script src="/fe/admin/js/core/popper.min.js"></script>
<script src="/fe/admin/js/core/bootstrap.min.js"></script>
<script src="/fe/admin/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<!-- Chart JS -->
<script src="/fe/admin/js/plugins/chartjs.min.js"></script>
<!--  Notifications Plugin    -->
<script src="/fe/admin/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<script src="/fe/admin/js/now-ui-dashboard.min.js?v=1.3.0" type="text/javascript"></script>
<!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
<script src="/fe/admin/demo/demo.js"></script>
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="//cdn.datatables.net/1.10.9/js/jquery.dataTables.min.js"></script>
<script src="//cdn.datatables.net/buttons/1.2.4/js/dataTables.buttons.min.js"></script>
<script src="//cdn.datatables.net/buttons/1.2.4/js/buttons.flash.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.colVis.min.js"></script>
<script src="https://cdn.datatables.net/select/1.2.0/js/dataTables.select.min.js"></script>
<script src="https://code.jquery.com/ui/1.11.3/jquery-ui.min.js"></script>
<script src="{{ url('quickadmin/js') }}/bootstrap.min.js"></script>
<script src="{{ url('quickadmin/js') }}/select2.full.min.js"></script>
<script src="{{ url('quickadmin/js') }}/main.js"></script>

<script>
    window._token = '{{ csrf_token() }}';
</script>
<script>
    $(document).ready(function () {
        $('#userToggle').on('click', function () {
            console.log('a');
            $('.sub-menu').toggle();
        });
    })
</script>


@yield('javascript')