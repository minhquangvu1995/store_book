<table border="1">
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Content</th>
        <th>Create At</th>
        {{--<th>Status</th>--}}
    </tr>
    @foreach ($posts as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->title }}</td>
            <td>{{ str_limit($item->content, 50) }}</td>
            <td>{{ $item->create_at }}</td>
{{--            <td>{{ $item->active ? 'đã duyệt' : 'chưa duyệt'}}</td>--}}
        </tr>
    @endforeach
</table>
