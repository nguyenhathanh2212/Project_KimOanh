@extends('templates.admin.master')
@section('title')
Danh sách dự án
@endsection
@section('content')

<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <div class="col-md-6"><h3 class="box-title">Danh sách dự án</h3></div>
                <div class="col-md-6">
                    <div class="input-group input-group-sm">
                        <input type="text" class="form-control search-project" data-url="{{ route('admin.project.search') }}">
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
            <div class="box-body content-list-project">
                @include ('admin.project.list-content')
            </div>
            <!-- /.box-body -->
        </div>
    </div>
</div>
<!-- /.box -->
@endsection
@push('scripts')
@endpush
