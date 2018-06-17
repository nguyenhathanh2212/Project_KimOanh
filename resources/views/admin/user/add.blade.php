@extends('templates.admin.master')
@section('title')
Thêm user
@endsection
@section('content')
    <form action="{{ route('admin.user.store') }}" method="post">
        @csrf
        <div class="box-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Nhập email</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
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
                <input type="fullname" name="fullname" class="form-control" id="exampleInputPassword1" placeholder="Nhập fullname">
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Thêm</button>
            </div>  
        </div>
        <!-- /.box-body -->
    </form>
@endsection
