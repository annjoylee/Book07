@extends('layouts.admin')

@section('content')
  <div class="columns">
    <div class="column is-narrow">
      <h1 class="title is-4">使用者資料</h1>
    </div>
    <div class="column">
    </div>
  </div>

  <div class="box is-radiusless">
    <div class="columns">
      <div class="column">
        <h3 class="subtitle is-5">使用者ID：{{ $user->id }}</h3>
      </div>
      <div class="column">
        <a href="{{ route('users.edit', $user->id)}}" class="button is-primary is-pulled-right">編輯</a>
      </div>
    </div>
    <table class="table is-fullwidth is-narrow">
      <tbody>
        <tr>
          <td>名稱</td>
          <td>{{ $user->name }}</td>
        </tr>
        <tr>
          <td>電子郵件</td>
          <td>{{ $user->email }}</td>
        </tr>
        <tr>
          <td>身份</td>
          <td>
            <ul>
            @foreach ($user->roles as $role)
              <li>{{ $role->display_name }} — <em>{{ $role->description }}</em></li>
            @endforeach
            </ul>
          </td>
        </tr>
        <tr>
          <td>地區/語言</td>
          <td></td>
        </tr>
        <tr>
          <td>加入時間</td>
          <td>{{ $user->created_at }}</td>
        </tr>
        <tr>
          <td>上次更新時間</td>
          <td>{{ $user->updated_at }}</td>
        </tr>
        <tr>
          <td class="is-narrow">上次上站時間</td>
          <td></td>
        </tr>
      </tbody>
    </table>
  </div>
@endsection

@section('scripts')
  <script>
    var adminMenu = new Vue({
      el: '#admin-menu',
      data: {
        isOpen: false //side-menu
      }
    })
  </script>
@endsection
