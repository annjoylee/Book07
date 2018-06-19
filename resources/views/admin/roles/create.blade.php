@extends('layouts.admin')

@section('content')

  <h1 class="title is-4">新增身份：</h1>
  <div class="box" id="role-create-form">
    <form action="{{ route('roles.store') }}" method="POST" role="form" novalidate>
    {{ csrf_field() }}

      <div class="field">
        <label for="display_name" class="label">名稱</label>
        <div class="control has-icons-left">
          <input class="input {{ $errors->has('display_name') ? 'is-danger' : '' }}" name="display_name" id="display_name" placeholder="請輸入名稱" v-model="displayName" required>
          <span class="icon is-small is-left">
            <i class="fa fa-user-circle-o"></i>
          </span>
        </div>
        @if ($errors->has('display_name'))
        <p class="help is-danger">{{ $errors->first('display_name') }}</p>
        @endif
      </div>

      <div class="field">
        <label for="name" class="label">Slug (新增後無法變更)</label>
        <div class="control has-icons-left">
          <input class="input {{ $errors->has('name') ? 'is-danger' : '' }}" name="name" id="name" placeholder="請輸入slug" v-model="name" required>
          <span class="icon is-small is-left">
            <i class="fa fa-user-circle-o"></i>
          </span>
        </div>
        @if ($errors->has('name'))
        <p class="help is-danger">{{ $errors->first('name') }}</p>
        @endif
      </div>

      <div class="field">
        <label for="description" class="label">描述</label>
        <div class="control has-icons-left">
          <input class="input" name="description" id="description" placeholder="請輸入描述">
          <span class="icon is-small is-left">
            <i class="fa fa-commenting"></i>
          </span>
        </div>
        @if ($errors->has('description'))
        <p class="help is-danger">{{ $errors->first('description') }}</p>
        @endif
      </div>

      <div class="field">
        <label for="permissions" class="label">管理權限</label>
        @foreach ($permissions as $permission)
        <div class="field">
          <div class="control">
            <b-checkbox name="permissions[]" :native-value="{{ $permission->id }}">{{ $permission->display_name }} — <em>{{ $permission->description }}</em></b-checkbox>
          </div>
        </div>
        @endforeach

      </div>

      <div class="field">
        <div class="control">
          <a href="{{ route('roles.index') }}" class="button">取消</a>
          <button class="button is-primary" type="submit" name="button">新增</button>
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

  var roleCreateForm = new Vue({
    el: '#role-create-form',
    data: {
      displayName:''
    },
    computed: {
      name: function(){
        return this.displayName.replace(' ', '-').toLowerCase();
      }
    }
  })

</script>

@endsection
