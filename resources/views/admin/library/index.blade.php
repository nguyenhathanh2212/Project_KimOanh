@extends('templates.admin.master')
@section('content')

 <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">General Elements</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form">
              	                <!-- select -->
                <div class="form-group">
                  <label>Loại tin</label>
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
                  <label>Preview</label>
                  <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                </div>
                <div class="form-group">
                  <label>Nội dung tin tức</label>
                 <textarea id="editor1" class="ckeditor" name="editor1" rows="10" cols="80" >
                    Nhập nội dung,có thể bao gồm ảnh....
                </textarea>
                </div>
				        
                <div class="form-group">
                  <label for="exampleInputFile">Chọn ảnh</label>
                  <input type="file" id="exampleInputFile">

                  <p class="help-block">Vui lòng chọn ảnh vào</p>
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