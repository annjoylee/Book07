@extends('layouts.app')

@section('content')
<div class="columns is-centered m-t-5">
  <div class="column is-one-third">
    <div class="card">
      <header class="card-header">
        <p class="card-header-title">
          登入
        </p>
      </header>
      <div class="card-content">

        <form action="{{ route('login') }}" method="POST" role="form" novalidate>
        {{ csrf_field() }}

        <div class="field">
          <div class="control has-icons-left">
            <input class="input {{ $errors->has('email') ? 'is-danger' : '' }}" type="email" name="email" id="email" placeholder="電子郵件" value="{{ old('email') }}" required>
            <span class="icon is-small is-left">
              <i class="fa fa-envelope"></i>
            </span>
          </div>
          @if ($errors->has('email'))
          <p class="help is-danger">{{ $errors->first('email') }}</p>
          @endif
        </div>

        <div class="field">
          <div class="control has-icons-left">
            <input class="input {{ $errors->has('password') ? 'is-danger' : '' }}" type="password" name="password" id="password" placeholder="密碼" required>
            <span class="icon is-small is-left">
              <i class="fa fa-lock"></i>
            </span>
          </div>
          @if ($errors->has('password'))
          <p class="help is-danger">{{ $errors->first('password') }}</p>
          @endif
        </div>

        <div class="field">
          <div class="control">
            <b-checkbox name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>記得我</b-checkbox>
          </div>
        </div>

        <div class="field">
          <div class="control">
            <button class="button is-primary is-fullwidth" type="submit" name="button">登入</button>
          </div>
        </div>

      </form>

    </div><!--end of card-centent-->
  </div><!--end of card-->
    <h5 class="has-text-centered m-t-10"><a class="is-muted" href="{{ route('password.request') }}">忘記密碼？</a></h5>
  </div><!--end of column-->
</div><!--end of columns-->
<hr>
<div class="columns is-centered">
  <div class="column is-one-third">
    <h2 class="has-text-centered m-b-10">還沒有帳號？</h2>
    <a class="button is-info is-fullwidth" href="{{ route('register') }}">註冊新帳號</a>
  </div>
</div>
@endsection

@section('scripts')
  <script>
    var app = new Vue({
      el: '#app'
    });
  </script>
@endsection
