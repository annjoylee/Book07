@extends('layouts.app')

@section('content')
<div class="columns is-centered m-t-5">
  <div class="column is-one-third">
    <div class="card">
      <header class="card-header">
        <p class="card-header-title">
          註冊
        </p>
      </header>
      <div class="card-content">

        <form action="{{ route('login') }}" method="POST" role="form">
        {{ csrf_field() }}

        <div class="field">
          <div class="control has-icons-left">
            <input class="input {{ $errors->has('email') ? 'is-danger' : '' }}" type="email" name="email" id="email" placeholder="電子郵件" value="{{ old('email') }}">
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
            <input class="input {{ $errors->has('password') ? 'is-danger' : '' }}" type="password" name="email" id="password" placeholder="密碼">
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
            <b-checkbox {{ old('remember') ? 'checked' : '' }}>記得我</b-checkbox>
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
    <h5 class="has-text-centered m-t-10"><a class="is-muted" href="{{ route('password.request') }}">忘記密碼？</a></h5>
  </div><!--end of column-->
</div>
<hr>
<div class="columns is-centered">
  <div class="column is-one-third">
    <h2 class="has-text-centered m-b-10">已經擁有帳號？</h2>
    <a class="button is-primary is-fullwidth" href="{{ route('login') }}">登入</a>
  </div>
</div>
<!-- <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->
@endsection
