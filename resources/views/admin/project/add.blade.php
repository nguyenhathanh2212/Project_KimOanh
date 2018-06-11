@extends('templates.admin.master')
@section('title')
Thêm tin tức
@endsection
@section('content')

<div class="box box-warning">
  <div class="box-header with-border">
    <h3 class="box-title">Thêm dự án</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <form role="form">
     <!-- select -->
     <div class="form-group">
      <label>Loại dự án</label>
      <select class="form-control">
        <option>option 1</option>
        <option>option 2</option>
        <option>option 3</option>
        <option>option 4</option>
        <option>option 5</option>
      </select>
    </div>
    <!-- text input -->
    <div class="form-group">
      <label>Tiêu đề</label>
      <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
    </div>
    <div class="form-group">
      <label>Sơ lược</label>
      <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
    </div>
    <div class="form-group">
      <div class="box box-solid">
        <div class="box-header with-border">
          <h3 class="box-title">Nhập chi tiết thông tin tổng quan</h3>
          <div class="box-tools">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
          </div>
        </div>
        <div class="box-body no-padding">
          <ul class="nav nav-pills nav-stacked">
            <li>
              <div class="form-child">
                <label>Sơ lược</label>
                <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
              </div>
            </li>
            <li>
              <div class="form-child">
                <label>Vị trí</label>
                <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
              </div>
            </li>
            <li>
              <div class="form-child">
                <label>Đầu tư và phân phối</label>
                <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
              </div>
            </li>
            <li>
              <div class="form-child">
                <label>Hạ tầng</label>
                <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
              </div>
            </li>
            <li>
              <div class="form-child">
                <label>Tiện ích nội khu</label>
                <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
              </div>
            </li>
            <li>
              <div class="form-child">
                <label>Tiện ích liên kết</label>
                <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
              </div>
            </li>
            <li>
              <div class="form-child">
                <label>Pháp lí</label>
                <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
              </div>
            </li>
          </ul>
        </div>
        <!-- /.box-body -->
      </div>
    </div>

  <div class="form-group">
    <label for="exampleInputFile">Chọn ảnh</label>
    <input type="file" id="exampleInputFile">
  </div>
  <div class="form-group">
    <label for="exampleInputFile">URL video</label>
    <input type="text" id="exampleInputVideo">
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