@extends('templates.admin.master')
@section('title')
Danh sách tin tức
@endsection
@section('content')

<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Danh sách tin tức</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th width='2%'>ID</th>
                            <th width='30%'>Tiêu đề</th>
                            <th width='30%'>Preview</th>
                            <th width='10%'>Loại tin</th>
                            <th width='10%'>Ảnh</th>
                            <th width='20%'>Chức năng</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($newses as $news)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $news->title }}</td>
                                <td>{{ $news->preview }}</td>
                                <td>{{ $news->typeNews->name }}</td>
                                <td>
                                    <img height="50px" src="{{ $news->first_picture }}" alt="">
                                </td>
                                <td>
                                    <a type="button" href="{{ route('admin.news.edit', $news->id) }}" class="btn btn-primary btn-info">Sửa</a>
                                    <form method="delete" action="{{ route('admin.news.destroy', $news->id) }}" class="col-md-6">
                                        <button type="submit" class="btn btn-primary btn-danger">Xóa</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $newses->links() }}
            </div>
            <!-- /.box-body -->
        </div>
    </div>
</div>
<!-- /.box -->
@endsection
