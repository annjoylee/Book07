@extends('layouts.admin')

@section('content')
  <div class="m-b-10">
      <h1 class="title is-4 is-inline m-r-10">作者資料庫</h1>
      <a href="{{ route('persons.create') }}" class="button is-primary">新增</a>
  </div>

  <div class="box is-radiusless">
    <div class="mobile-firendly-table">
      <table class="table is-fullwidth is-narrow">
        <thead>
          <tr>
            <th>ID</th>
            <th>名稱</th>
            <th>類型</th>
            <th>別名</th>
            <th>上次更新時間</th>
            <th>動作</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($persons as $person)
            <tr>
              <td>{{ $person->id }}</td>
              <td>{{ $person->name }}</td>
              <td></td>
              <td></td>
              <td>{{ $person->updated_at }}</td>
              <td>
                <a href="{{ route('books.show', $person->id) }}" class="button is-primary is-small">詳細</a>
                <a href="{{ route('books.edit', $person->id) }}" class="button is-info is-small">編輯</a>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    {{$persons->links()}}
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
