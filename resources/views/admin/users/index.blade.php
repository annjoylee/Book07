@extends('layouts.admin')

@section('content')
  <div class="columns">
    <div class="column is-narrow">
      <h1 class="title is-5">使用者名單</h1>
    </div>
    <div class="column">
      <a href="{{ route('users.create')}}" class="button is-primary is-pulled-left">新增</a>
    </div>
  </div>

  <div class="box is-radiusless">
    <table class="table is-fullwidth is-narrow">
      <thead>
        <tr>
          <th>ID</th>
          <th>Email</th>
          <th>Name</th>
          <th>Date Created</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($users as $user)
          <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->created_at }}</td>
            <td>
              <a href="{{ route('users.show', $user->id) }}" class="button is-primary is-small">詳細</a>
              <a href="{{ route('users.edit', $user->id) }}" class="button is-info is-small">編輯</a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
    {{$users->links()}}
  </div>
@endsection
