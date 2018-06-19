@extends('layouts.admin')

@section('content')
  <div class="m-b-10">
      <h1 class="title is-4 is-inline m-r-10">身份列表</h1>
      <a href="{{ route('roles.create') }}" class="button is-primary">新增</a>
  </div>

  <div class="columns is-multiline">
    @foreach ($roles as $role)
    <div class="column is-one-quarter">
        <div class="card">

          <div class="card-content">
            <div class="content">
              <h3 class="title is-5">{{$role->display_name}}</h3>
              <h4 class="subtitle"><em>{{$role->name}}</em></h4>
              <p>{{$role->description}}</p>
            </div>
          </div>

          <footer class="card-footer">
            <a href="{{ route('roles.show', $role->id) }}" class="card-footer-item">
              <span class="icon"><i class="fa fa-fw fa-info-circle" aria-hidden="true"></i></span>&nbsp;
              詳細</a>
            <a href="{{ route('roles.edit', $role->id) }}" class="card-footer-item is-info">
              <span class="icon"><i class="fa fa-fw fa-edit" aria-hidden="true"></i></span>&nbsp;
              編輯</a>
          </footer>

        </div>
    </div>

    @endforeach
  </div>
@endsection

@section('scripts')
<script>
  var adminMenu = new Vue({
    el: '#admin-menu',
    data: {
      isOpen: true //side-menu
    }
  })
</script>
@endsection
