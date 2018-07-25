@extends('layouts.admin')

@section('content')
  <div class="m-b-10">
      <h1 class="title is-4 is-inline m-r-10">圖書資料庫</h1>
      <a href="{{ route('books.create') }}" class="button is-primary">新增</a>
  </div>

  <div class="box is-radiusless">
    <div class="mobile-firendly-table">
      <table class="table is-fullwidth is-narrow">
        <thead>
          <tr>
            <th>ID</th>
            <th>標題</th>
            <th>原文標題</th>
            <th>作者</th>
            <th>上次更新時間</th>
            <th>動作</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($books as $user)
            <tr>
              <td>{{ $book->id }}</td>
              <td>{{ $book->name }}</td>
              <td>{{ $book->alternate_name }}</td>
              <td></td>
              <td>{{ $book->updated_at }}</td>
              <td>
                <a href="{{ route('books.show', $book->id) }}" class="button is-primary is-small">詳細</a>
                <a href="{{ route('books.edit', $book->id) }}" class="button is-info is-small">編輯</a>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    {{$books->links()}}
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
