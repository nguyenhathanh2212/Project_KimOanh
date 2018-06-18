@extends('templates.admin.master')
@section('title')
Thêm dự án
@endsection
@section('content')
    <div class="box box-warning">
        <div class="box-header with-border">
            <h3 class="box-title">Thêm dự án</h3>
        </div>
        @include ('templates.admin.notice')
        <!-- /.box-header -->
        <div class="box-body">
            <form action="{{ route('admin.project.store') }}" method="post" enctype="multipart/form-data">
             <!-- select -->
                @csrf
                <div class="form-group">
                    <label>Loại dự án</label>
                    <select class="form-control" name="type_id">
                        @foreach ($typeProjects as $typeProject)
                            <option value="{{ $typeProject->id }}">{{ $typeProject->name }}</option>
                        @endforeach
                    </select>
                </div>
                <!-- text input -->
                <div class="form-group">
                    <label>Tiêu đề</label>
                    <textarea class="form-control" required name="title" rows="3" placeholder="Enter ..."></textarea>
                </div>
                <div class="form-group">
                    <label>Sơ lược</label>
                    <textarea class="form-control" required name="preview" rows="3" placeholder="Enter ..."></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">Hình ảnh liên quan</label>
                    <input type="file" name="pictures[]" required multiple id="exampleInputFile">
                </div>
                <div class="form-group">
                    <label for="exampleInputvideo">Video</label>
                    <div class="row">
                        <div class="col-md-5">
                            <input type="file" required name="video_upload" id="exampleInputvideo">
                        </div>
                        <div class="col-md-2">
                            Hoặc
                        </div>
                        <div class="col-md-5">
                            <label for="exampleInputFile">URL video</label>
                            <input type="text" name="video_url" id="exampleInputVideo">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="box box-solid">
                        <div class="box-header with-border">
                            <h3 class="box-title">Nhập thông tin tổng quan</h3>
                            <div class="box-tools">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="box-body no-padding">
                            <ul class="nav nav-pills nav-stacked">
                                <li>
                                    <div class="form-child">
                                        <label for="exampleInputFile">Hình ảnh</label>
                                        <input type="file" name="picture_overview" required id="exampleInputFile">
                                    </div>
                                </li>
                                <li>
                                    <div class="form-child">
                                        <label>Vị trí</label>
                                        <textarea class="form-control" required name="position" rows="3" placeholder="Enter ..."></textarea>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-child">
                                        <label>Quy mô</label>
                                        <textarea class="form-control" required name="area" rows="3" placeholder="Enter ..."></textarea>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-child">
                                        <label>Đầu tư và phân phối</label>
                                        <textarea class="form-control" required name="investment" rows="3" placeholder="Enter ..."></textarea>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-child">
                                        <label>Hạ tầng</label>
                                        <textarea class="form-control" required name="structure" rows="3" placeholder="Enter ..."></textarea>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-child">
                                        <label>Tiện ích nội khu</label>
                                        <textarea class="form-control" required name="utility_local" rows="3" placeholder="Enter ..."></textarea>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-child">
                                        <label>Tiện ích liên kết</label>
                                        <textarea class="form-control" required name="utility_link" rows="3" placeholder="Enter ..."></textarea>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-child">
                                        <label>Pháp lí</label>
                                        <textarea class="form-control" required name="contract" rows="3" placeholder="Enter ..."></textarea>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- /.box-body -->
                    </div>
                </div>
                <div class="form-group">
                    <div class="box box-solid">
                        <div class="box-header with-border">
                            <h3 class="box-title">Nhập tiện ích</h3>
                        </div>
                        <div class="box-body no-padding">
                            <ul class="nav nav-pills nav-stacked list-utilities">
                                <li class="li-utility">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-child">
                                                <label>Tiêu đề</label>
                                                <input type="text" required name="title_utilities[]" class="form-control" placeholder="Enter ..." />
                                            </div>
                                            <div class="form-child">
                                                <label for="exampleInputFile">Chọn ảnh</label>
                                                <input type="file" required name="picture_utilities[]"  id="exampleInputFile">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-child">
                                                <label>Nội dung</label>
                                                <textarea class="form-control" required name="content_utilities[]" rows="4" placeholder="Enter ..."></textarea>
                                            </div>
                                        </div>
                                        <div class="remove-utilities col-md-1 col-md-offset-11">
                                            <button type="button" onclick="return confirm('Bạn có chắc muốn xóa tiện ích này?')" class="btn btn-remove-utilities"><i class="fa fa-trash"></i></button>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <button type="button" class="btn btn-add-utilities"><i class="fa fa-plus"></i>
                            </button>
                        </div>
                        <!-- /.box-body -->
                    </div>
                </div>
                <div class="form-group">
                    <div class="box box-solid">
                        <div class="box-header with-border">
                            <h3 class="box-title">Vi trí</h3>
                        </div>
                        <div class="box-body no-padding">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-child">
                                        <label for="exampleInputFile">Chọn ảnh</label>
                                        <input type="file" required name="location_picture" id="exampleInputFile">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-child">
                                        <label>Nội dung</label>
                                        <textarea class="form-control" required name="location_content" rows="3" placeholder="Enter ..."></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="box box-solid">
                        <div class="box-header with-border">
                            <h3 class="box-title">Phân lô</h3>
                        </div>
                        <div class="box-body no-padding">
                            <div class="form-child">
                                <label for="exampleInputFile">Chọn ảnh</label>
                                <input type="file" name="subdivision_picture" required id="exampleInputFile">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Thêm</button>
                </div>
            </form>
        </div>
        <!-- /.box-body -->
    </div>
    @endsection
    @push('scripts')
    <script>
        $(function () {
            // Replace the <textarea id="editor1"> with a CKEditor
            // instance, using default configuration.
            // CKEDITOR.replace('editor1');
            //bootstrap WYSIHTML5 - text editor
            // $('.textarea').wysihtml5()

            $(document).on('click', '.btn-add-utilities', function(event) {
                event.preventDefault();
                $('.list-utilities').append(`
                    <li class="li-utility">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-child">
                                    <label>Tiêu đề</label>
                                    <input type="text" required name="title_utilities[]" class="form-control" placeholder="Enter ..." />
                                </div>
                                <div class="form-child">
                                    <label for="exampleInputFile">Chọn ảnh</label>
                                    <input type="file" required name="picture_utilities[]"  id="exampleInputFile">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-child">
                                    <label>Nội dung</label>
                                    <textarea class="form-control" required name="content_utilities[]" rows="4" placeholder="Enter ..."></textarea>
                                </div>
                            </div>
                            <div class="remove-utilities col-md-1 col-md-offset-11">
                                <button type="button" onclick="return confirm('Bạn có chắc muốn xóa tiện ích này?')" class="btn btn-remove-utilities"><i class="fa fa-trash"></i></button>
                            </div>
                        </div>
                    </li>
                `);
            });

            $(document).on('click', '.btn-remove-utilities', function(event) {
                event.preventDefault();

                var utility = $('.list-utilities').find('.li-utility');

                if (utility.length == 1) {
                    alert('Tiện ích phải có ít nhất 1 phần tử');
                    return false;
                }

                $(this).closest('.li-utility').remove();
            });
        })
    </script>
@endpush