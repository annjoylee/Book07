<nav class="navbar has-shadow" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="{{route('home')}}">
      <img src="{{asset('images/book07_logo.png')}}" alt="Book07">
    </a>
  </div>
  <div class="navbar-menu">
    <div class="navbar-start">
      <a href="#" class="navbar-item">讀經</a>
      <a href="#" class="navbar-item">分類</a>
      <a href="#" class="navbar-item">書單</a>
      <a href="#" class="navbar-item">書評</a>
    </div>
    <div class="navbar-end">
      <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link">繁</a>
        <div class="navbar-dropdown is-right">
          <a href="#" class="navbar-item">繁體中文</a>
          <a href="#" class="navbar-item">简体中文</a>
          <a href="#" class="navbar-item">English</a>
        </div>
      </div>
      @guest
      <div class="navbar-item"><a href="{{ route('login') }}" class="button is-primary">登入/註冊</a></div>
      @else
      <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link">{{ Auth('name') }}</a>
        <div class="navbar-dropdown is-right">
          <a href="#" class="navbar-item">
            <span class="icon"><i class="fa fa-fw fa-pencil-square-o" aria-hidden="true"></i></span>&nbsp;
            靈修＆筆記</a>
          <a href="#" class="navbar-item">
            <span class="icon"><i class="fa fa-fw fa-book" aria-hidden="true"></i></span>&nbsp;
            書櫃</a>
          <a href="#" class="navbar-item">
            <span class="icon"><i class="fa fa-fw fa-commenting" aria-hidden="true"></i></span>&nbsp;
            書評</a>
          <a href="#" class="navbar-item">
            <span class="icon"><i class="fa fa-fw fa-bookmark" aria-hidden="true"></i></span>&nbsp;
            書摘</a>
          <a href="#" class="navbar-item">
            <span class="icon"><i class="fa fa-fw fa-list" aria-hidden="true"></i></span>&nbsp;
            書單</a>
          <a href="#" class="navbar-item">
            <span class="icon"><i class="fa fa-fw fa-bell" aria-hidden="true"></i></span>&nbsp;
            動態</a>
          <hr class="navbar-divider">
          <a href="#" class="navbar-item">
            <span class="icon"><i class="fa fa-fw fa-cog" aria-hidden="true"></i></span>&nbsp;
            帳號設定</a>
          <a href="#" class="navbar-item">
            <span class="icon"><i class="fa fa-fw fa-sign-out" aria-hidden="true"></i></span>&nbsp;
            登出</a>
        </div>
      </div>
      @endguest
    </div>
  </div>
</nav>
