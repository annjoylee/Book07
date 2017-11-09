@extends('layouts.admin')

@section('content')
  <div class="columns">
    <div class="column is-narrow">
      <h1 class="title is-5">權限資料：<em>{{ $permission->name }}</em></h1>
    </div>
    <div class="column">
    </div>
  </div>

  <div class="box is-radiusless">
    <table class="table is-fullwidth is-narrow">
      <tbody>
        <tr>
          <td>權限ID</td>
          <td>{{ $permission->id }}</td>
        </tr>
        <tr>
          <td>權限名稱</td>
          <td>{{ $permission->display_name }}</td>
        </tr>
        <tr>
          <td>slug名稱</td>
          <td>{{ $permission->name }}</td>
        </tr>
        <tr>
          <td>描述</td>
          <td>{{ $permission->description }}</td>
        </tr>
        <tr>
          <td>新增時間</td>
          <td>{{ $permission->created_at }}</td>
        </tr>
        <tr>
          <td class="is-narrow">上次更新時間</td>
          <td>{{ $permission->updated_at }}</td>
        </tr>
      </tbody>
    </table>
    <a href="{{ route('permissions.edit', $permission->id)}}" class="button is-info">編輯</a>
  </div>
@endsection
