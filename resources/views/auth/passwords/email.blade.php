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
          忘記密碼？
        </p>
      </header>
      <div class="card-content">

        <form action="{{ route('password.email') }}" method="POST" role="form" novalidate>
        {{ csrf_field() }}

        <div class="field">
          <label for="email" class="label">電子郵件</label>
          <div class="control has-icons-left">
            <input class="input {{ $errors->has('email') ? 'is-danger' : '' }}" type="email" name="email" id="email" placeholder="請輸入電子郵件" value="{{ old('email') }}" required>
            <span class="icon is-small is-left">
              <i class="fa fa-envelope"></i>
            </span>
          </div>
          @if ($errors->has('email'))
          <p class="help is-danger">{{ $errors->first('email') }}</p>
          @endif
        </div>

        <div class="field">
          <div class="control">
            <button class="button is-primary is-fullwidth" type="submit" name="button">寄出重設密碼連結</button>
          </div>
        </div>

      </form>

    </div><!--end of card-centent-->
  </div><!--end of card-->
    <h5 class="has-text-centered m-t-10"><a class="is-muted" href="{{ route('login') }}"><span class="icon"><i class="fa fa-long-arrow-left"></i></span>&nbsp;返回登入頁</a></h5>
  </div><!--end of column-->
</div><!--end of columns-->
@endsection
