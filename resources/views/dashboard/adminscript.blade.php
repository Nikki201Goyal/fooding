
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{asset('adminko/assets/vendors/js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{asset('adminko/assets/vendors/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('adminko/assets/vendors/progressbar.js/progressbar.min.js')}}"></script>
    <script src="{{asset('adminko/assets/vendors/jvectormap/jquery-jvectormap.min.js')}}"></script>
    <script src="{{asset('adminko/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
    <script src="{{asset('adminko/assets/vendors/owl-carousel-2/owl.carousel.min.js')}}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{asset('adminko/assets/js/off-canvas.js')}}"></script>
    <script src="{{asset('adminko/assets/js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('adminko/assets/js/misc.js')}}"></script>
    <script src="{{asset('adminko/assets/js/settings.js')}}"></script>
    <script src="{{asset('adminko/assets/js/todolist.js')}}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{asset('adminko/assets/js/dashboard.js')}}"></script>
    <!-- End custom js for this page -->


    <!-- datatable script -->
    <script src="{{asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>

    <script>
    

        $(".datatable").DataTable({
            "responsive": true,
            "autowidth": false,

        })


        
    $('.sa-delete').on('click',function(){ //delete
        let form_id =$(this).data('form-id');
        swal({
  title: "Are you sure?",
  text: "Once deleted, you will not be able to recover this category!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    $('#'+form_id).submit();
  }
});
    })
    </script>

    
