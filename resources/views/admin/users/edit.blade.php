@extends('layouts.admin')

@section('content')

  <h1 class="title is-4">編輯使用者</h1>

  <div class="box" id="user-update-form">
    <form action="{{ route('users.update', $user->id) }}" method="POST" role="form" novalidate>
    {{ method_field('PUT') }}
    {{ csrf_field() }}

    <div class="columns">

      <div class="column">

        <div class="field">
          <label for="email" class="label">電子郵件</label>
          <div class="control has-icons-left">
            <input class="input {{ $errors->has('email') ? 'is-danger' : '' }}" type="email" name="email" id="email" placeholder="請輸入Email" value="{{ $user->email }}" required>
            <span class="icon is-small is-left">
              <i class="fa fa-envelope"></i>
            </span>
          </div>
          @if ($errors->has('email'))
          <p class="help is-danger">{{ $errors->first('email') }}</p>
          @endif
        </div>

        <div class="field">
          <label for="name" class="label">名稱</label>
          <div class="control has-icons-left">
            <input class="input" type="text" name="name" id="name" placeholder="使用者名稱" value="{{ $user->name }}">
            <span class="icon is-small is-left">
              <i class="fa fa-user"></i>
            </span>
          </div>
        </div>

        <div class="field">
          <label for="password" class="label">密碼</label>
              <div class="control" id="password-options">
                    <b-radio v-model="passwordOptions" name="password_options" native-value="keep">不變更密碼</b-radio>
                    <b-radio v-model="passwordOptions" name="password_options" native-value="auto">自動產生新密碼</b-radio>
                    <b-radio v-model="passwordOptions" name="password_options" native-value="manual">手動輸入新密碼</b-radio>
              </div>
              <p class="control m-t-5">
                <input type="text" class="input" name="password" id="password" v-if="passwordOptions == 'manual'" placeholder="手動輸入新密碼">
              </p>
        </div>
        @if ($errors->has('password'))
        <p class="help is-danger">{{ $errors->first('password') }}</p>
        @endif

      </div>{{--end of first column--}}

      <div class="column">

        <div class="field">
          <label for="roles" class="label">使用者身份</label>

          @foreach ($roles as $role)
            <div class="control">
              <b-checkbox name="roles[]" id="roles" v-model="roles" :native-value="{{ $role->id }}">{{ $role->display_name }} — <em>{{ $role->description }}</em></b-checkbox>
            </div>
          @endforeach

        </div>
      </div>

    </div>


    <div class="field m-t-20">
      <div class="control">
        <a href="{{ route('users.show', $user->id) }}" class="button">取消</a>
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
        isOpen: false //side-menu
      }
    })
    var userUpdateForm = new Vue({
      el: '#user-update-form',
      data: {
        passwordOptions:'keep',
        roles: {!! $user->roles->pluck('id') !!}
      }
    })
  </script>
@endsection
