@extends('layouts.admin')

@section('content')
  <div class="columns">
    <div class="column is-narrow">
      <h1 class="title is-5">使用者資料</h1>
    </div>
    <div class="column">
    </div>
  </div>

  <div class="box is-radiusless">
    <a href="{{ route('users.edit', $user->id)}}" class="button is-primary is-pulled-right m-b-10">編輯</a>
    <table class="table is-fullwidth is-narrow">
      <tbody>
        <tr>
          <td>使用者ID</td>
          <td>{{ $user->id }}</td>
        </tr>
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
          <td></td>
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
          <td class="is-narrow">上次上站時間</td>
          <td></td>
        </tr>
        <tr>
          <td>密碼</td>
          <td></td>
        </tr>
      </tbody>
    </table>
  </div>
@endsection
