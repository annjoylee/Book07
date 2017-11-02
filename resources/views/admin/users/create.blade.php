@extends('layouts.admin')

@section('content')

  <h1 class="title is-5">新增使用者</h1>

  <div class="box">
    <form action="{{ route('users.store') }}" method="POST" role="form" novalidate>
    {{ csrf_field() }}

    <div class="field">
      <label for="email" class="label">電子郵件</label>
      <div class="control has-icons-left">
        <input class="input {{ $errors->has('email') ? 'is-danger' : '' }}" type="email" name="email" id="email" placeholder="請輸入Email" v-model="email" required>
        <span class="icon is-small is-left">
          <i class="fa fa-envelope"></i>
        </span>
      </div>
      @if ($errors->has('email'))
      <p class="help is-danger">{{ $errors->first('email') }}</p>
      @endif
    </div>

    <div class="field">
      <label for="password" class="label">密碼</label>
      <div class="control has-icons-left" v-if="!auto_password">
        <input class="input {{ $errors->has('password') ? 'is-danger' : '' }}" name="password" id="password" placeholder="手動輸入密碼">
        <span class="icon is-small is-left">
          <i class="fa fa-lock"></i>
        </span>
      </div>
    </div>
    @if ($errors->has('password'))
    <p class="help is-danger">{{ $errors->first('password') }}</p>
    @endif
    <div class="field">
      <div class="control">
        <b-checkbox name="auto_password" v-model="auto_password">自動生成密碼</b-checkbox>
      </div>
    </div>


    <div class="field">
      <label for="name" class="label">名稱</label>
      <div class="control has-icons-left">
        <input class="input" type="text" name="name" id="name" placeholder="使用者名稱" :value="auto_name">
        <span class="icon is-small is-left">
          <i class="fa fa-user"></i>
        </span>
      </div>
    </div>

    <div class="field m-t-10">
      <div class="control">
        <a href="{{ route('users.index')}}" class="button">取消</a>
        <button class="button is-primary" type="submit" name="button">新增</button>
      </div>
    </div>

    </form>
  </div>

@endsection

@section('scripts')
  <script>
    var app = new Vue({
      el: '#app',
      data: {
        email:'',
        auto_password:true
      },
      computed: {
        auto_name: function() {
          var emailSplit = this.email.split('@')
          return emailSplit[0]
        }
      }
    })
  </script>
@endsection
