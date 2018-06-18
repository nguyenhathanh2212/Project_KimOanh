@extends('templates.admin.master')
@section('title')
Thông tin liên lạc
@endsection
@section('content')

<div class="box box-warning">
    <div class="box-header with-border">
        <h3 class="box-title">Thông tin liên lạc</h3>
    </div>
    @include ('templates.admin.notice')
    <!-- /.box-header -->
    <div class="box-body">
        <form role="form" method="post" action="{{ route('admin.contract.update', $contract->id) }}">
            @csrf
            @method('PUT')
            <!-- text input -->
            <div class="form-group">
                <label>Tên chủ quản</label>
                <textarea class="form-control" rows="3" name="name" placeholder="Enter ...">{{$contract->name}}</textarea>
            </div>

            <div class="form-group">
                <label>Địa chỉ</label>
                <textarea class="form-control" rows="3" name="address" placeholder="Enter ...">{{$contract->address}}</textarea>
            </div>

            <div class="form-group">
                <label>Số điện thoại</label>
                <textarea class="form-control" rows="3" name="phone" placeholder="Enter ...">{{$contract->phone}}</textarea>
            </div>
         
         <div class="form-group">
                <label>Hotline</label>
                <textarea class="form-control" rows="3" name="hotline" placeholder="Enter ...">{{$contract->hotline}}</textarea>
            </div>

            <div class="form-group">
                <label>Email</label>
                <textarea class="form-control" rows="3" name="email" placeholder="Enter ...">{{$contract->email}}</textarea>
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