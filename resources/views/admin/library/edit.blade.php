@extends('templates.admin.master')
@section('title')
Sửa thư viện
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
        <label>Title</label>
        <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
      </div>
      <div class="form-group">
        <label>Ảnh hiện tại</label><br>
        <img src="{{ config('setting.new_image_default') }}" alt="" width="200">
        <div class="checkbox">
          <label>
            <input type="checkbox">Xóa ảnh
          </label>
        </div>
      </div>
      <div class="form-group">
        <label for="exampleInputFile">Chọn ảnh thay thế</label>
        <input type="file" id="exampleInputFile">

        <p class="help-block">Vui lòng chọn ảnh vào</p>
        
      </div>
      <div class="box-footer">
        <button type="submit" class="btn btn-primary">Sửa</button>
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