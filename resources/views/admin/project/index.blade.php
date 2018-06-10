@extends('templates.admin.master')
@section('title')
Danh sách dự án
@endsection
@section('content')

<div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Danh sách dự án</h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <table id="example2" class="table table-bordered table-hover">
          <thead>
            <tr>
              <th width='2%'>ID</th>
              <th width='30%'>Tiêu đề</th>
              <th width='30%'>Sơ lược</th>
              <th width='10%'>Loại tin</th>
              <th width='10%'>Ảnh</th>
              <th width='20%'>Chức năng</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>dfdddddddddddđf</td>
              <td>fgfg</td>
              <td> fgfg</td>
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