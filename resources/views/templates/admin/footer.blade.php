     </div>
        <footer class="main-footer">
            <div class="pull-right hidden-xs">
                Anything you want
            </div>
            <strong>Copyright &copy; 2016 <a href="#">Company</a>.</strong> All rights reserved.
        </footer>
    </div>
    {{ Html::script(asset(config('setting.folder_js_admin') . 'jquery.min.js')) }}
    {{ Html::script(asset(config('setting.folder_js_admin') . 'bootstrap.min.js')) }}
    <script src="https://cdn.ckeditor.com/4.9.2/standard/ckeditor.js"></script>
    {{ Html::script(asset(config('setting.folder_js_admin') . 'demo.js')) }}
    {{ Html::script(asset(config('setting.folder_js_admin') . 'adminlte.min.js')) }}
    {{ Html::script(asset(config('setting.folder_js_admin') . 'script.js')) }}
    {{-- <script src="dist/js/adminlte.min.js"></script> --}}
    <script>
        $(function () {
            // $('#example1').DataTable();
            // $('#example2').DataTable({
            //     'paging'            : true,
            //     'lengthChange': false,
            //     'searching'     : false,
            //     'ordering'        : true,
            //     'info'                : true,
            //     'autoWidth'     : false
            // })
        })
    </script>
    @stack('scripts')
    </body>
</html>
