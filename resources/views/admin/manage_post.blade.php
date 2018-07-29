<?php echo 'Welcome back : ' . $user['username']; ?>
<br><br>

<table border="1">
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Content</th>
        <th>Create At</th>
        <th>Status</th>
        @if($user['is_admin'] == 1)
            <th>Change Status</th>
        @else
            <th>Add/Edit/Delete</th>
        @endif
    </tr>
    @foreach ($posts as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->title }}</td>
            <td>{{ str_limit($item->content, 50) }}</td>
            <td>{{ $item->create_at }}</td>
            <td>{{ $item->active ? 'đã duyệt' : 'chưa duyệt'}}</td>
            @if($user['is_admin'] == 1)
                <td>
                    <button>Change Status</button>
                </td>
            @else
                <td>
                    <button>Add/Edit/Delete</button>
                </td>
            @endif
        </tr>
    @endforeach
</table>