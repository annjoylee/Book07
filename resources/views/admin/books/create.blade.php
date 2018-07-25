@extends('layouts.admin')

@section('content')

  <h1 class="title is-4">新增一筆圖書</h1>

  <div class="box">
    <form action="{{ route('books.store') }}" method="POST" role="form" novalidate>
    {{ csrf_field() }}


    <div class="field">
      <label for="name" class="label">標題</label>
      <div class="control has-icons-left">
        <input class="input is-small" type="text" name="name" id="name">
        <span class="icon is-small is-left">
          <i class="fa fa-book"></i>
        </span>
      </div>
    </div>

    <div class="field m-t-10">
      <div class="control">
        <a href="{{ route('books.index')}}" class="button">取消</a>
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
      isOpen: false //side-menu
    }
  })
</script>

@endsection
