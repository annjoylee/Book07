@extends('layouts.admin')

@section('content')
  <div class="columns">
    <div class="column is-narrow">
      <h1 class="title is-4">權限列表</h1>
    </div>
    <div class="column">
      <a href="{{ route('permissions.create') }}" class="button is-primary is-pulled-left">新增</a>
    </div>
  </div>

  <div class="box is-radiusless">
    <table class="table is-fullwidth is-narrow">
      <thead>
        <tr>
          <th>ID</th>
          <th>名稱</th>
          <th>描述</th>
          <th>上次更新時間</th>
          <th>動作</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($permissions as $permission)
          <tr>
            <td>{{ $permission->id }}</td>
            <td>{{ $permission->display_name }}</td>
            <td>{{ $permission->description }}</td>
            <td>{{ $permission->updated_at }}</td>
            <td>
              <a href="{{ route('permissions.show', $permission->id) }}" class="button is-primary is-small">詳細</a>
              <a href="{{ route('permissions.edit', $permission->id) }}" class="button is-info is-small">編輯</a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection
