@extends('templates.admin.master')
@section('title')
Danh sách tin tức
@endsection
@section('content')

<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <div class="col-md-6"><h3 class="box-title">Danh sách tin tức</h3></div>
                <div class="col-md-6">
                    <div class="input-group input-group-sm">
                        <input type="text" class="form-control search-news" data-url="{{ route('admin.news.search') }}">
                        <span class="input-group-btn">
                            <button type="button" class="btn btn-info btn-flat">
                                <i class="fa fa-fw fa-search"></i>
                            </button>
                        </span>
                    </div>
                </div>
            </div>
            @include ('templates.admin.notice')
            <!-- /.box-header -->
            <div class="box-body content-list-news">
                @include ('admin.news.list-content')
            </div>
            <!-- /.box-body -->
        </div>
    </div>
</div>
<!-- /.box -->
@endsection
@push('scripts')
@endpush
