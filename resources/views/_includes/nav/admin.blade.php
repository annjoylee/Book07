<aside class="menu m-t-15 m-l-10">
  <p class="menu-label">
    一般
  </p>
  <ul class="menu-list">
    <li><a href="{{ route('admin') }}">管理區首頁</a></li>
  </ul>

  <p class="menu-label">
    使用者管理
  </p>
  <ul class="menu-list">
    <li><a href="{{ route('users.index') }}">使用者名單</a></li>
    <li>
      <a>身份＆權限</a>
      <ul>
        <li><a href="{{ route('roles.index') }}">身份列表</a></li>
        <li><a href="{{ route('permissions.index') }}">權限列表</a></li>
      </ul>
    </li>
  </ul>
</aside>
