@extends('templates.admin.master')
@section('title')
Sửa tin tức
@endsection
@section('content')

<div class="box box-warning">
    <div class="box-header with-border">
        <h3 class="box-title">Sửa tin tức</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <form method="post" action="{{ route('admin.news.update', $news->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <!-- select -->
            <div class="form-group">
                <label>Loại tin</label>
                <select class="form-control" name="type_id">
                    @foreach ($typeNews as $typeNew)
                        <option value="{{ $typeNew->id }}"
                            {{ $typeNew->id == $news->type_id ? 'selected' : '' }}>
                            {{ $typeNew->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <!-- text input -->
            <div class="form-group">
                <label>Tiêu đề</label>
                <textarea class="form-control" name="title" rows="3" placeholder="Enter ...">{{ $news->title }}</textarea>
            </div>
            <div class="form-group">
                <label>Sơ lược</label>
                <textarea class="form-control" rows="3" name="preview" placeholder="Enter ...">{{ $news->preview }}</textarea>
            </div>
            <textarea id="editor1" class="ckeditor" name="content" rows="10" cols="80">
                {!! $news->content !!}
            </textarea>
            <div class="form-group">
                <label>Ảnh hiện tại</label><br>
                <img src="{{ $news->first_picture }}" alt="" width="200">
                {{-- <div class="checkbox">
                    <label>
                        <input nametype="checkbox">Xóa ảnh
                    </label>
                </div> --}}
            </div>
            <div class="form-group">
                <label for="exampleInputFile">Chọn ảnh thay thế</label>
                <input type="file" name="picture" id="exampleInputFile">

                <p class="help-block">Vui lòng chọn ảnh vào</p>
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Sửa</button>
                </div>
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