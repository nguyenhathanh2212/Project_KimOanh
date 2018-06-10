@extends('templates.admin.master')
@section('title')
Thêm user
@endsection
@section('content')
<form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nhập email</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" disabled>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Mật khẩu</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Mật khẩu">
                </div>
				<div class="form-group">
                  <label for="exampleInputPassword1">Nhập lại mật khẩu</label>
                  <input type="re_password" class="form-control" id="exampleInputPassword1" placeholder="Nhập lại mật khẩu">
                </div>
				<div class="form-group">
                  <label for="exampleInputPassword1">Nhập fullname</label>
                  <input type="fullname" class="form-control" id="exampleInputPassword1" placeholder="Nhập fullname">
                </div>

				 <div class="form-group">
                <button type="submit" class="btn btn-primary">Thêm</button>
              </div>	
              </div>
              <!-- /.box-body -->

             
            </form>

@endsection