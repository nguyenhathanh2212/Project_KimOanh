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
                        @foreach ($libraries as $library)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $library->title }}</td>
                                <td>
                                    <img height="50px" src="{{ $library->first_picture }}" alt="">
                                </td>
                                <td>
                                    <a type="button" href="{{ route('admin.library.edit', $library->id) }}" class="btn btn-primary btn-info">Sửa</a>
                                    <form method="delete" action="{{ route('admin.library.destroy', $library->id) }}" class="col-md-6">
                                        <button type="submit" class="btn btn-primary btn-danger">Xóa</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach                        
                    </tbody>
                </table>
                {{ $libraries->links() }}
            </div>
            <!-- /.box-body -->
        </div>
    </div>
</div>
<!-- /.box -->
@endsection
