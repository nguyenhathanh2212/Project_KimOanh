@extends('templates.admin.master')
@section('title')
Danh sách tin tức
@endsection
@section('content')

<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Danh sách liên lạc</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th width='2%'>ID</th>
                            <th width='25%'>Tên</th>
                            <th width='25%'>Địa chỉ</th>
                            <th width='10%'>Số điện thoại</th>
                            <th width='10%'>Hotline</th>
                            <th width='10%'>Email</th>
                            <th width='20%'>Chức năng</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($contracts as $contract)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $contract->name }}</td>
                                <td>{{ $contract->address }}</td>
                                <td>{{ $contract->phone }}</td>
                                <td>{{ $contract->hotline }}</td>
                                <td>{{ $contract->email }}</td>
                               
                                <td>
                                    <a type="button" href="{{ route('admin.contract.edit', $contract->id) }}" class="btn btn-primary btn-info">Sửa</a>
                                    <form method="delete" action="{{ route('admin.contract.destroy', $contract->id) }}" class="col-md-6">
                                        <button type="submit" class="btn btn-primary btn-danger">Xóa</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach 
                    </tbody>
                </table>
                {{ $contracts->links() }}
            </div>
            <!-- /.box-body -->
        </div>
    </div>
</div>
<!-- /.box -->
@endsection
