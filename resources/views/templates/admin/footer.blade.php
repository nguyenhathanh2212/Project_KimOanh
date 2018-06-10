 </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2016 <a href="#">Company</a>.</strong> All rights reserved.
  </footer>

</div>

 {{ Html::script(asset(config('setting.folder_js_admin') . 'jquery.min.js')) }}
{{-- <script src="bower_components/jquery/dist/jquery.min.js"></script> --}}
<!-- Bootstrap 3.3.7 -->
{{ Html::script(asset(config('setting.folder_js_admin') . 'bootstrap.min.js')) }}
{{-- <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script> --}}
<!-- AdminLTE App -->

<script src="https://cdn.ckeditor.com/4.9.2/standard/ckeditor.js"></script>
{{ Html::script(asset(config('setting.folder_js_admin') . 'demo.js')) }}
{{ Html::script(asset(config('setting.folder_js_admin') . 'adminlte.min.js')) }}
{{-- <script src="dist/js/adminlte.min.js"></script> --}}

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
     <script>
  $(function () {
    // $('#example1').DataTable();
    // $('#example2').DataTable({
    //   'paging'      : true,
    //   'lengthChange': false,
    //   'searching'   : false,
    //   'ordering'    : true,
    //   'info'        : true,
    //   'autoWidth'   : false
    // })
  })
</script>
@stack('scripts')
</body>
</html>