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
            @include ('templates.admin.notice')
            <div class="box-body">
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th width='5%'>STT</th>
                            <th width='10%'>Tên</th>
                            <th width='10%'>Email</th>
                            <th width='15%'>Tiêu để</th>
                            <th width='10%'>Số điện thoại</th>
                            <th width='40%'>Nội dung</th>
                            <th width='10%'>Chức năng</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($contacts as $contact)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $contact->name }}</td>
                                <td>{{ $contact->email }}</td>
                                <td>{{ $contact->title }}</td>
                                <td>{{ $contact->phone }}</td>
                                <td>{{ $contact->content }}</td>
                                <td>
                                    <form method="post" action="{{ route('admin.contact.destroy', $contact->id) }}" class="col-md-6">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" onclick="return confirm('Bạn có chắc muốn xóa?')" class="btn btn-primary btn-danger">Xóa</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach                        
                    </tbody>
                </table>
                {{ $contacts->links() }}
            </div>
            <!-- /.box-body -->
        </div>
    </div>
</div>
<!-- /.box -->
@endsection
