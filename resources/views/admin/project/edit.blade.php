@extends('templates.admin.master')
@section('title')
Thêm tin tức
@endsection
@section('content')
    <div class="box box-warning">
        <div class="box-header with-border">
            <h3 class="box-title">Thêm dự án</h3>
        </div>
        @include ('templates.admin.notice')
        <!-- /.box-header -->
        <div class="box-body">
            <form action="{{ route('admin.project.update', $project->id) }}" method="post" enctype="multipart/form-data">
             <!-- select -->
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label>Loại dự án</label>
                    <select class="form-control" name="type_id">
                        @foreach ($typeProjects as $typeProject)
                            <option {{ $project->type_id == $typeProject->id ? 'selected' : '' }}
                                value="{{ $typeProject->id }}">{{ $typeProject->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <!-- text input -->
                <div class="form-group">
                    <label>Tiêu đề</label>
                    <textarea class="form-control" required name="title" rows="3" placeholder="Enter ...">{{ $project->title }}</textarea>
                </div>
                <div class="form-group">
                    <label>Sơ lược</label>
                    <textarea class="form-control" required name="preview" rows="3" placeholder="Enter ...">{{ $project->preview }}</textarea>
                </div>
                <div class="form-group">
                    <label>Ảnh hiện tại</label><br>
                    <img src="{{ $project->first_picture }}" alt="" width="200">
                    {{-- <div class="checkbox">
                        <label>
                            <input nametype="checkbox">Xóa ảnh
                        </label>
                    </div> --}}
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">Chọn ảnh thay thế</label>
                    <input type="file" name="picture" id="exampleInputFile">
                </div>
                <div class="form-group">
                    <label>Video hiện tại</label><br>
                    <iframe width="200" src="{{ $project->first_video }}" frameborder="0" allow="autoplay; encrypted-media"></iframe>
                </div>
                <div class="form-group">
                    <label for="exampleInputvideo">Chọn video thay thế</label>
                    <div class="row">
                        <div class="col-md-5">
                            <input type="file" name="video_upload" id="exampleInputvideo">
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
                            <h3 class="box-title">Thông tin tổng quan</h3>
                            <div class="box-tools">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="box-body no-padding">
                            @php
                                $overview = $project->overview;
                            @endphp
                            <ul class="nav nav-pills nav-stacked">
                                <li>
                                    <div class="form-child">
                                        <label>Vị trí</label>
                                        <textarea class="form-control" required name="position" rows="3" placeholder="Enter ...">{{ $overview->position }}</textarea>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-child">
                                        <label>Quy mô</label>
                                        <textarea class="form-control" required name="area" rows="3" placeholder="Enter ...">{{ $overview->area }}</textarea>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-child">
                                        <label>Đầu tư và phân phối</label>
                                        <textarea class="form-control" required name="investment" rows="3" placeholder="Enter ...">{{ $overview->investment }}</textarea>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-child">
                                        <label>Hạ tầng</label>
                                        <textarea class="form-control" required name="structure" rows="3" placeholder="Enter ...">{{ $overview->structure }}</textarea>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-child">
                                        <label>Tiện ích nội khu</label>
                                        <textarea class="form-control" required name="utility_local" rows="3" placeholder="Enter ...">{{ $overview->utility_local }}</textarea>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-child">
                                        <label>Tiện ích liên kết</label>
                                        <textarea class="form-control" required name="utility_link" rows="3" placeholder="Enter ...">{{ $overview->utility_link }}</textarea>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-child">
                                        <label>Pháp lí</label>
                                        <textarea class="form-control" required name="contract" rows="3" placeholder="Enter ...">{{ $overview->contract }}</textarea>
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
                            <h3 class="box-title">Tiện ích</h3>
                        </div>
                        <div class="box-body no-padding">
                            <ul class="nav nav-pills nav-stacked list-utilities">
                                @foreach ($project->utilities as $utility)
                                    <li class="li-utility">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-child">
                                                    <label>Tiêu đề</label>
                                                    <input type="text" value="{{ $utility->title }}" required name="title_utilities[]" class="form-control" placeholder="Enter ..." />
                                                </div>
                                                <div class="form-child">
                                                    <div class="form-group">
                                                        <label>Ảnh hiện tại</label><br>
                                                        <img src="{{ $utility->first_picture }}" alt="" width="200">
                                                    </div>
                                                    <label for="exampleInputFile">Chọn ảnh thay thế</label>
                                                    <input type="file" name="picture_utilities[]"  id="exampleInputFile">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-child">
                                                    <label>Nội dung</label>
                                                    <textarea class="form-control" required name="content_utilities[]" rows="4" placeholder="Enter ...">{{ $utility->content }}</textarea>
                                                </div>
                                            </div>
                                            @if ($loop->iteration != 1)
                                                <div class="col-md-1 col-md-offset-11">
                                                    <button type="button" onclick="return confirm('Bạn có chắc muốn xóa tiện ích này?')" class="btn btn-remove-utilities"><i class="fa fa-trash"></i></button>
                                                </div>
                                            @endif
                                        </div>
                                    </li>
                                @endforeach
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
                                        <label>Ảnh hiện tại</label><br>
                                        <img src="{{ $project->location_picture_custom }}" alt="" width="200">
                                    </div>
                                    <div class="form-child">
                                        <label for="exampleInputFile">Chọn ảnh</label>
                                        <input type="file" name="location_picture" id="exampleInputFile">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-child">
                                        <label>Nội dung</label>
                                        <textarea class="form-control" required name="location_content" rows="3" placeholder="Enter ...">{{ $project->location_content }}</textarea>
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
                                <label>Ảnh hiện tại</label><br>
                                <img src="{{ $project->subdivision_picture_custom }}" alt="" width="200">
                            </div>
                            <div class="form-child">
                                <label for="exampleInputFile">Chọn ảnh</label>
                                <input type="file" name="subdivision_picture" id="exampleInputFile">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Sửa</button>
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
                            <div class="col-md-1 col-md-offset-11">
                                <button type="button" onclick="return confirm('Bạn có chắc muốn xóa tiện ích này?')" class="btn btn-remove-utilities"><i class="fa fa-trash"></i></button>
                            </div>
                        </div>
                    </li>
                `);
            });

            $(document).on('click', '.btn-remove-utilities', function(event) {
                event.preventDefault();
                $(this).closest('.li-utility').remove();
            });
        })
    </script>
@endpush
