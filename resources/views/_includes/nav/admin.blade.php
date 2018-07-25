<div class="side-menu" id="admin-menu">

  <aside class="menu m-t-15 m-l-10">
    <p class="title is-5">控制台</p>
    <p class="menu-label">
      一般
    </p>
    <ul class="menu-list">
      <li><a href="{{ route('admin') }}" class="{{ Route::currentRouteNamed('admin') ? 'is-active' : '' }}">控制台首頁</a></li>
    </ul>

    <p class="menu-label">
      資料庫管理
    </p>
    <ul class="menu-list">
      <li><a href="{{ route('books.index') }}"
        class="{{ Route::currentRouteNamed('books.index') ? 'is-active' : '' }}
        {{ Route::currentRouteNamed('books.create') ? 'is-active' : '' }}
        {{ Route::currentRouteNamed('books.show') ? 'is-active' : '' }}
        {{ Route::currentRouteNamed('books.edit') ? 'is-active' : '' }}">
        圖書資料庫</a></li>
      <li><a href="{{ route('persons.index') }}"
        class="{{ Route::currentRouteNamed('persons.index') ? 'is-active' : '' }}
        {{ Route::currentRouteNamed('persons.create') ? 'is-active' : '' }}
        {{ Route::currentRouteNamed('persons.show') ? 'is-active' : '' }}
        {{ Route::currentRouteNamed('persons.edit') ? 'is-active' : '' }}">
        作者資料庫</a></li>
    </ul>


    <p class="menu-label">
      使用者管理
    </p>
    <ul class="menu-list">
      <li><a href="{{ route('users.index') }}"
        class="{{ Route::currentRouteNamed('users.index') ? 'is-active' : '' }}
        {{ Route::currentRouteNamed('users.create') ? 'is-active' : '' }}
        {{ Route::currentRouteNamed('users.show') ? 'is-active' : '' }}
        {{ Route::currentRouteNamed('users.edit') ? 'is-active' : '' }}">
        使用者名單</a></li>
      <li>
        <b-collapse :open.sync="isOpen" id="collapse" v-cloak>
          <a slot="trigger">
            網站權限
            <b-icon pack="fa" :icon="isOpen ? 'angle-down' : 'angle-right'" size="is-small"></b-icon>
          </a>
          <ul>
            <li><a href="{{ route('roles.index') }}" class="{{ Route::currentRouteNamed('roles.index') ? 'is-active' : '' }}
            {{ Route::currentRouteNamed('roles.create') ? 'is-active' : '' }}
            {{ Route::currentRouteNamed('roles.show') ? 'is-active' : '' }}
            {{ Route::currentRouteNamed('roles.edit') ? 'is-active' : '' }}" >身份管理</a></li>
            <li><a href="{{ route('permissions.index') }}" class="{{ Route::currentRouteNamed('permissions.index') ? 'is-active' : '' }}
            {{ Route::currentRouteNamed('permissions.create') ? 'is-active' : '' }}
            {{ Route::currentRouteNamed('permissions.show') ? 'is-active' : '' }}
            {{ Route::currentRouteNamed('permissions.edit') ? 'is-active' : '' }}">權限管理</a></li>
          </ul>
        </b-collapse>
      </li>
    </ul>
  </aside>

</div>
