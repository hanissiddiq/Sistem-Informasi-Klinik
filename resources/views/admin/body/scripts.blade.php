<!-- jQuery -->
<script src="{{ asset('preclinic/assets/js/jquery-3.7.1.min.js')}}"></script>

<!-- Bootstrap Core JS -->
<script src="{{ asset('preclinic/assets/js/bootstrap.bundle.min.js')}}"></script>

<!-- Feather Js -->
<script src="{{ asset('preclinic/assets/js/feather.min.js')}}"></script>

<!-- Slimscroll -->
<script src="{{ asset('preclinic/assets/js/jquery.slimscroll.js')}}"></script>

<!-- Select2 Js -->
<script src="{{ asset('preclinic/assets/js/select2.min.js')}}"></script>

<!-- Datatables JS -->
<script src="{{ asset('preclinic/assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('preclinic/assets/plugins/datatables/datatables.min.js')}}"></script>

<!-- counterup JS -->
<script src="{{ asset('preclinic/assets/js/jquery.waypoints.js')}}"></script>
<script src="{{ asset('preclinic/assets/js/jquery.counterup.min.js')}}"></script>

<!-- Apexchart JS -->
<script src="{{ asset('preclinic/assets/plugins/apexchart/apexcharts.min.js')}}"></script>
<script src="{{ asset('preclinic/assets/plugins/apexchart/chart-data.js')}}"></script>

<!-- Custom JS -->
<script src="{{ asset('preclinic/assets/js/app.js')}}"></script>




<!-- ========================================================================== -->
<!-- ========================================================================== -->
<!-- ========================================================================== -->
<!-- ========================================================================== -->
<!-- ========================================================================== -->
<!-- ========================================================================== -->




<script>
    $(document).ready(function() {
        $('#example').DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
            "language": {
                "search": "Search:",
                "lengthMenu": "Show _MENU_ entries",
                "info": "Showing _START_ to _END_ of _TOTAL_ entries",
                "infoEmpty": " Showing 0 to 0 of 0 entries",
                "infoFiltered": "(filtered from _MAX_ total entries)",
                "paginate": {
                    "first": "First",
                    "last": "Last",
                    "next": "Next",
                    "previous": "Previous"
                }
            }
        }).buttons().container().appendTo('#example_wrapper .col-md-6:eq(0)');
    });
</script>

<!-- Toastr -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>


 <script>
    toastr.option = {
        "closeButton": true,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "timeOut": "3000"
    }

    @if(session('message'))
        toastr.success("{{ session('message') }}")
    @endif
 </script>
