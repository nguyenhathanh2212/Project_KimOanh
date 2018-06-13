@extends('templates.admin.master')
@section('title')
Thêm liên lạc
@endsection
@section('content')

<div class="box box-warning">
  <div class="box-header with-border">
    <h3 class="box-title">General Elements</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <form role="form">
      <!-- text input -->
      <div class="form-group">
        <label>Tên</label>
        <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
      </div>

      <div class="form-group">
        <label>Địa chỉ</label>
        <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
      </div>

      <div class="form-group">
        <label>Số điện thoại</label>
        <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
      </div>
     
     <div class="form-group">
        <label>Hotline</label>
        <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
      </div>

      <div class="form-group">
        <label>Email</label>
        <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
      </div>
      <div class="box-footer">
        <button type="submit" class="btn btn-primary">Thêm</button>
      </div>
    </form>
  </div>
  <!-- /.box-body -->
</div>
@endsection
@push('scripts')
<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    // CKEDITOR.replace('editor1');
    //bootstrap WYSIHTML5 - text editor
    // $('.textarea').wysihtml5()
  })
</script>
@endpush