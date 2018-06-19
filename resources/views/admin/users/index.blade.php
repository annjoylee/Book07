@extends('layouts.admin')

@section('content')

  <div class="m-b-10">
      <h1 class="title is-4 is-inline m-r-10">使用者名單</h1>
      <a href="{{ route('users.create') }}" class="button is-primary">新增</a>
  </div>


  {{-- <div class="box is-radiusless" id="users-table">
      <b-table :data="users">
      <template slot-scope="props">
                <b-table-column field="id" label="ID" width="40" numeric>
                  @{{ props.row.id }}
                </b-table-column>
                <b-table-column field="email" label="Email">
                  @{{ props.row.email }}
                </b-table-column>
                <b-table-column field="name" label="名稱">
                  @{{ props.row.name }}
                </b-table-column>
                <b-table-column field="roles.display_name" label="最高權限">
                  @{{ props.row.roles.display_name }}
                </b-table-column>
                <b-table-column field="updated_at" label="上次更新時間">
                  @{{ new Date(props.row.updated_at).toLocaleDateString() }}
                </b-table-column>
                <b-table-column custom-key="actions" label="動作">
                  <button class="button is-small is-light" @click="show(props.row)">
                    <b-icon icon="show" size="is-small"></b-icon>
                  </button>
                  <button class="button is-small is-light" @click="edit(props.row)">
                    <b-icon icon="edit" size="is-small"></b-icon>
                  </button>
                </b-table-column>

      </template>
      </b-table>
  </div>

  <div class="box is-radiusless">
      <b-table :data="users" :columns="columns"></b-table>
  </div> --}}


  <div class="box is-radiusless">
    <div class="mobile-firendly-table">
      <table class="table is-fullwidth is-narrow">
        <thead>
          <tr>
            <th>ID</th>
            <th>Email</th>
            <th>名稱</th>
            <th>最高權限（身份）</th>
            <th>上次更新時間</th>
            <th>動作</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($users as $user)
            <tr>
              <td>{{ $user->id }}</td>
              <td>{{ $user->email }}</td>
              <td>{{ $user->name }}</td>
              <td>{{ $user->roles->pluck('display_name')->first() }}</td>
              <td>{{ $user->updated_at }}</td>
              <td>
                <a href="{{ route('users.show', $user->id) }}" class="button is-primary is-small">詳細</a>
                <a href="{{ route('users.edit', $user->id) }}" class="button is-info is-small">編輯</a>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    {{$users->links()}}
  </div>

@endsection


@section('scripts')


<script>
  // var usersTable = new Vue({
  //   el: '#users-table',
  //   data() {
  //       return {
  //         users:
  //       }
  //   }//data
  //
  // })

  var adminMenu = new Vue({
    el: '#admin-menu',
    data: {
      isOpen: false //side-menu
    }
  })

</script>

@endsection
