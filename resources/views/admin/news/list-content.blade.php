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
                    <form method="get" action="{{ route('admin.news.edit', $news->id) }}" class="col-md-6">
                        <button type="submit" class="btn btn-primary btn-info">Sửa</button>
                    </form>
                    <form method="post" action="{{ route('admin.news.destroy', $news->id) }}" class="col-md-6">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Bạn có chắc muốn xóa?')" class="btn btn-primary btn-danger">Xóa</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
{{ $newses->links() }}
