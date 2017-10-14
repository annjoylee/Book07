@extends('layouts.app')

@section('content')
<div class="columns is-centered m-t-5">
  <div class="column is-half">
    <div class="card">
      <header class="card-header">
        <p class="card-header-title">
          加入Book07
        </p>
      </header>
      <div class="card-content">

        <form action="{{ route('register') }}" method="POST" role="form" novalidate>
        {{ csrf_field() }}

        <div class="field">
          <label for="email" class="label">電子郵件</label>
          <div class="control has-icons-left">
            <input class="input {{ $errors->has('email') ? 'is-danger' : '' }}" type="email" name="email" id="email" placeholder="請輸入Email" required>
            <span class="icon is-small is-left">
              <i class="fa fa-envelope"></i>
            </span>
          </div>
          @if ($errors->has('email'))
          <p class="help is-danger">{{ $errors->first('email') }}</p>
          @endif
        </div>

        <div class="columns">
          <div class="column">
            <div class="field">
              <label for="password" class="label">密碼</label>
              <div class="control has-icons-left">
                <input class="input {{ $errors->has('password') ? 'is-danger' : '' }}" type="password" name="password" id="password" placeholder="請輸入密碼" required>
                <span class="icon is-small is-left">
                  <i class="fa fa-lock"></i>
                </span>
              </div>
              @if ($errors->has('password'))
              <p class="help is-danger">{{ $errors->first('password') }}</p>
              @endif
            </div>
          </div>

          <div class="column">
            <div class="field">
              <label for="password_confirmation" class="label">確認密碼</label>
              <div class="control has-icons-left">
                <input class="input {{ $errors->has('password_confirmation') ? 'is-danger' : '' }}" type="password" name="password_confirmation" id="password_confirmation" placeholder="請確認密碼" required>
                <span class="icon is-small is-left">
                  <i class="fa fa-lock"></i>
                </span>
              </div>
              @if ($errors->has('password'))
              <p class="help is-danger">{{ $errors->first('password') }}</p>
              @endif
            </div>
          </div>
        </div>

        <div class="field m-t-10 is-grouped">
          <div class="control is-expanded">
            <b-checkbox name="terms" id="terms">我同意<a href="#">服務條款</a>和<a href="#">隱私權條款</a></b-checkbox>
            @if ($errors->has('terms'))
            <p class="help is-danger">{{ $errors->first('terms') }}</p>
            @endif
          </div>
          <div class="control">
            <b-checkbox name="subscribe" id="subscribe" value="true">訂閱Book07電子報</b-checkbox>
          </div>
        </div>


        <h4 class="line-text-line"><span>選填欄位</span></h4>

        <div class="field">
          <label for="name" class="label">名稱</label>
          <div class="control has-icons-left">
            <input class="input" type="text" name="name" id="name">
            <span class="icon is-small is-left">
              <i class="fa fa-user"></i>
            </span>
          </div>
        </div>

        <div class="field">
          <div class="control">
            <button class="button is-info is-fullwidth" type="submit" name="button">註冊</button>
          </div>
        </div>

      </form>

    </div><!--end of card-centent-->
  </div><!--end of card-->
  </div><!--end of column-->
</div>
<hr>
<div class="columns is-centered">
  <div class="column is-one-third">
    <h2 class="has-text-centered m-b-10">已經有帳號了？</h2>
    <a class="button is-primary is-fullwidth" href="{{ route('login') }}">登入</a>
  </div>
</div>
@endsection
