@extends('layouts.admin')

@section('content')

  <h1 class="title is-5">編輯權限：{{ $permission->name }}（ID：{{ $permission->id }}）</h1>
  <div class="box">
    <form action="{{ route('permissions.update', $permission->id) }}" method="POST" role="form" novalidate>
    {{ method_field('PUT') }}
    {{ csrf_field() }}

      <div class="field">
        <label for="display_name" class="label">名稱</label>
        <div class="control has-icons-left">
          <input class="input {{ $errors->has('display_name') ? 'is-danger' : '' }}" name="display_name" id="display_name" placeholder="請輸入名稱" value="{{ $permission->display_name }}" required>
          <span class="icon is-small is-left">
            <i class="fa fa-hand-paper-o"></i>
          </span>
        </div>
      </div>

      <div class="field">
        <label for="description" class="label">描述</label>
        <div class="control has-icons-left">
          <input class="input" name="description" id="description" placeholder="請輸入描述" value="{{ $permission->description }}" required>
          <span class="icon is-small is-left">
            <i class="fa fa-commenting"></i>
          </span>
        </div>
      </div>

      <div class="field">
        <div class="control">
          <a href="{{ route('permissions.show', $permission->id) }}" class="button">取消</a>
          <button class="button is-primary" type="submit" name="button">變更</button>
        </div>
      </div>

    </form>
  </div>
@endsection
