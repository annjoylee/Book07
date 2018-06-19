@extends('layouts.admin')

@section('content')
  <div class="box is-radiusless">
    <div class="columns">
      <div class="column">
        <div class="content">
          <h1 class="title">{{$role->display_name}}</h3>
          <h3 class="subtitle"><em>{{$role->name}}</em></h4>
        </div>
      </div>
      <div class="column">
        <a href="{{ route('roles.edit', $role->id)}}" class="button is-info is-pulled-right m-b-10">編輯</a>
      </div>
    </div>

    <div class="content">
      <p>{{$role->description}}</p>
    </div>

    <table class="table is-fullwidth is-striped is-narrow">
      <thead>
        <tr>
          <th>管理權限</th>
          <th>描述</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($role->permissions as $permission)
          <tr>
            <td>{{ $permission->display_name }}</td>
            <td>{{ $permission->description }}</td>
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
