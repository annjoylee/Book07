@extends('layouts.admin')

@section('content')

  <h1 class="title is-4">編輯身份：<em>{{ $role->name }}</em></h1>
  <div class="box">
    <form action="{{ route('roles.update', $role->id) }}" method="POST" role="form" novalidate>
    {{ method_field('PUT') }}
    {{ csrf_field() }}

      <div class="field">
        <label for="display_name" class="label">名稱</label>
        <div class="control has-icons-left">
          <input class="input {{ $errors->has('display_name') ? 'is-danger' : '' }}" name="display_name" id="display_name" placeholder="請輸入名稱" value="{{ $role->display_name }}" required>
          <span class="icon is-small is-left">
            <i class="fa fa-user-circle-o"></i>
          </span>
        </div>
      </div>

      <div class="field">
        <label for="description" class="label">描述</label>
        <div class="control has-icons-left">
          <input class="input" name="description" id="description" placeholder="請輸入描述" value="{{ $role->description }}">
          <span class="icon is-small is-left">
            <i class="fa fa-commenting"></i>
          </span>
        </div>
      </div>

      <div class="field">
        <label for="permissions" class="label">管理權限</label>
        @foreach ($permissions as $permission)
        <div class="field">
          <div class="control">
            <b-checkbox v-model="permissions" name="permissions[]" id="permissions" :native-value="{{ $permission->id }}">{{ $permission->display_name }} — <em>{{ $permission->description }}</em></b-checkbox>
          </div>
        </div>
        @endforeach
      </div>

      <div class="field">
        <div class="control">
          <a href="{{ route('roles.show', $role->id) }}" class="button">取消</a>
          <button class="button is-primary" type="submit" name="button">變更</button>
        </div>
      </div>

    </form>
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
  var roleUpdateForm = new Vue({
    el: '#app',
    data: {
      permissions: {!! $role->permissions->pluck('id') !!}
    }
  })
</script>

@endsection
