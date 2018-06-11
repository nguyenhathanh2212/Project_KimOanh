@extends('templates.admin.master')
@section('title')
    Danh sách user
@endsection
@section('content')

<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Danh sách user</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th width='10%'>ID</th>
                            <th width='30%'>Email</th>
                            <th width='30%'>FullName</th>
                            <th width='10%'>Phân Quyền</th>
                            <th width='20%'>Chức năng</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->fullname }}</td>
                                <td>{{ $user->admin_custom }}</td>
                                <td>
                                    <a href="{{ route('admin.user.edit', $user->id) }}" type="button" class="btn btn-primary btn-info">Sửa</a>
                                    <form method="delete" action="{{ route('admin.user.destroy', $user->id) }}" class="col-md-6">
                                        <button type="submit" class="btn btn-primary btn-danger">Xóa</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>
                {{ $users->links() }}
            </div>
            <!-- /.box-body -->
        </div>
    </div>
</div>
<!-- /.box -->
@endsection
