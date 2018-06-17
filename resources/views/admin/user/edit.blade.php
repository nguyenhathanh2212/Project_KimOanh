@extends('templates.admin.master')
@section('title')
Sửa user
@endsection
@section('content')
<form method="post" action="{{ route('admin.user.update', $user->id) }}">
    @csrf
    @method('PUT')
    <div class="box-body">
        @include ('templates.admin.notice')
        <div class="form-group">
            <label for="exampleInputEmail1">Nhập email</label>
            <input type="email" class="form-control" name="email" value="{{ $user->email }}" id="exampleInputEmail1" placeholder="Enter email" disabled>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Mật khẩu</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Mật khẩu">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Nhập lại mật khẩu</label>
            <input type="re_password" name="repassword" class="form-control" id="exampleInputPassword1" placeholder="Nhập lại mật khẩu">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Nhập fullname</label>
            <input type="fullname" name="fullname" value="{{ $user->fullname }}" class="form-control" id="exampleInputPassword1" placeholder="Nhập fullname">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Sửa</button>
        </div>  
    </div>
    <!-- /.box-body -->
</form>
@endsection