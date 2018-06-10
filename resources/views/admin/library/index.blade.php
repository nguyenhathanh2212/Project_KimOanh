@extends('templates.admin.master')
@section('title')
Danh sách thư viện
@endsection
@section('content')

<div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Danh sách thư viện</h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <table id="example2" class="table table-bordered table-hover">
          <thead>
            <tr>
              <th width='5%'>ID</th>
              <th width='50%'>Tiêu đề</th>
              <th width='30%'>Ảnh</th>
              <th width='15%'>Chức năng</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>dfdddddddddddđf</td>
              <td>
                <img src="" alt="">
              </td>
              <td>
                <button type="button" class="btn btn-primary btn-info">Sửa</button>
                <button type="button" class="btn btn-primary btn-danger">Xóa</button>
              </td>
            </tr>
            
          </tbody>

        </table>
      </div>
      <!-- /.box-body -->
    </div>
  </div>
</div>
<!-- /.box -->


@endsection