<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>accounts</h1>
  <div>
    <table>
      <thead>
        <tr>
          <th>No</a></th>
          <th><a href="?sort=name&order={{ $order === 'asc' ? 'desc' : 'asc' }}">氏名</a></th>
          <th>メールアドレス</a></th>
          <th>権限</th>
          <th>状態</th>
          <th>登録日</th>
          <th>操作</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($list as $item)
        <tr>
          <td>{{ $item->id }}</td>
          <td>{{ $item->name }}</td>
          <td><a href="{{ url('/account/detail') }}/{{ $item->id }}">{{ $item->email }}</a></td>
          <td>{{ $item->auth ? '管理者' : 'ユーザー' }}</td>
          <td>{{ $item->status ? '削除' : '有効' }}</td>
          <td>{{ $item->created_at ? $item->created_at->format('Y年m月d日') : '-' }}</td>
          <td><button type="button" onclick="location.href='{{ url('/account/edit') }}/{{ $item->id }}'">edit</button></td>
        </tr>
        @endforeach
      </tbody>
    </table>
    {{ $list->appends(request()->query())->links() }}
  </div>
</body>

</html>