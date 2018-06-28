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
    <tbody class="content-list-project">
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
                    <form method="get" action="{{ route('admin.project.edit', $project->id) }}" class="col-md-6">
                        <button type="submit" class="btn btn-primary btn-info">Sửa</button>
                    </form>
                    <form method="post" action="{{ route('admin.project.destroy', $project->id) }}" class="col-md-6">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Bạn có chắc muốn xóa?')" class="btn btn-primary btn-danger">Xóa</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
{{ $projects->links() }}
