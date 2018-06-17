@extends('templates.admin.master')
@section('title')
Thêm tin tức
@endsection
@section('content')

<div class="box box-warning">
    <div class="box-header with-border">
        <h3 class="box-title">Thêm tin tức</h3>
    </div>
    <!-- /.box-header -->
    @include ('templates.admin.notice')
    <div class="box-body">
        <form action="{{ route('admin.news.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Loại tin</label>
                <select class="form-control" name="type_id">
                    @foreach ($typeNews as $typeNew)
                        <option value="{{ $typeNew->id }}">{{ $typeNew->name }}</option>
                    @endforeach
                </select>
            </div>
            <!-- text input -->
            <div class="form-group">
                <label>Tiêu đề</label>
                <textarea class="form-control" rows="3" name="title" placeholder="Enter ..."></textarea>
            </div>
            <div class="form-group">
                <label>Sơ lược</label>
                <textarea class="form-control" name="preview" rows="3" placeholder="Enter ..."></textarea>
            </div>
            <div>
                <label>Nội dung</label>
                <textarea id="editor1" class="ckeditor" name="content" rows="10" cols="80"></textarea>
            </div>
            <div class="form-group">
                <label for="pictures">Chọn ảnh</label>
                <input multiple type="file" name="picture" id="pictures">

                <p class="help-block">Vui lòng chọn ảnh vào</p>
            </div>
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Thêm</button>
            </div>
        </form>
    </div>
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