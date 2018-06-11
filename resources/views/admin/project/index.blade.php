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
                        @foreach ($projects as $project)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $project->title }}</td>
                                <td>{{ $project->preview }}</td>
                                <td>{{ $project->typeProject->name }}</td>
                                <td>
                                    <img height="50px" src="{{ $project->first_picture }}" alt="">
                                </td>
                                <td>
                                    <a type="button" href="{{ route('admin.project.edit', $project->id) }}" class="btn btn-primary btn-info">Sửa</a>
                                    <form method="delete" action="{{ route('admin.project.destroy', $project->id) }}" class="col-md-6">
                                        <button type="submit" class="btn btn-primary btn-danger">Xóa</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $projects->links() }}
            </div>
            <!-- /.box-body -->
        </div>
    </div>
</div>
<!-- /.box -->
@endsection
