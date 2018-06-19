@extends('layouts.admin')

@section('content')
  <div class="m-b-10">
      <h1 class="title is-4 is-inline m-r-10">權限列表</h1>
      <a href="{{ route('permissions.create') }}" class="button is-primary">新增</a>
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

@section('scripts')
<script>
  var adminMenu = new Vue({
    el: '#admin-menu',
    data: {
      isOpen: true //side-menu
    }
  })
</script>
@endsection
