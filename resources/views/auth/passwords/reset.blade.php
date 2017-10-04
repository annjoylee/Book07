@extends('layouts.app')

@section('content')

＠if (session('status'))
  <div class="notification is-success">
    {{ session('status') }}
  </div>
@endif

<div class="columns is-centered m-t-5">
  <div class="column is-one-third">
    <div class="card">
      <header class="card-header">
        <p class="card-header-title">
          重設密碼
        </p>
      </header>
      <div class="card-content">

        <form action="{{ route('password.request') }}" method="POST" role="form" novalidate>
        {{ csrf_field() }}

        <input type="hidden" name="token" value="{{ $token }}">

        <div class="field">
          <label for="email" class="label">電子郵件</label>
          <div class="control has-icons-left">
            <input class="input {{ $errors->has('email') ? 'is-danger' : '' }}" type="email" name="email" id="email" placeholder="電子郵件" value="{{ $email or old('email') }}" required>
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
          <label for="password_confirmation" class="label">確認密碼</label>
          <div class="control has-icons-left">
            <input class="input {{ $errors->has('password_confirmation') ? 'is-danger' : '' }}" type="password" name="password_confirmation" id="password_confirmation" placeholder="確認密碼" required>
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
            <button class="button is-primary is-fullwidth" type="submit" name="button">重設密碼</button>
          </div>
        </div>

      </form>

    </div><!--end of card-centent-->
  </div><!--end of card-->
  </div><!--end of column-->
</div><!--end of columns-->
@endsection
