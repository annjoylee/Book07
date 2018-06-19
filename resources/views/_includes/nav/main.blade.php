<nav class="navbar has-shadow" role="navigation" aria-label="main navigation">

  <div class="navbar-brand">
    <a class="navbar-item" href="{{route('home')}}">
      <img src="{{asset('images/book07_logo.png')}}" alt="Book07">
    </a>

    @if (Request::segment(1)=="admin")
      <a class="navbar-item is-hidden-desktop" id="admin-slide-button">
        <span class="icon"><i class="fa fa-fw fa-angle-double-right" aria-hidden="true"></i></span>
      </a>
    @endif

    <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>

  </div>

  <div class="navbar-menu" id="nav-main">
    <div class="navbar-start">
      <a href="#" class="navbar-item">讀經</a>
      <a href="#" class="navbar-item">分類</a>
      <a href="#" class="navbar-item">書單</a>
      <a href="#" class="navbar-item">心得</a>
    </div>
    <div class="navbar-end">
      <b-dropdown position="is-bottom-left" v-cloak>
        <a class="navbar-item" slot="trigger">
          <span>繁 &nbsp;</span>
          <b-icon pack="fa" icon="caret-down" size="is-small"></b-icon>
        </a>

        <b-dropdown-item>
          繁體中文
        </b-dropdown-item>
        <b-dropdown-item>
          简体中文
        </b-dropdown-item>
        <b-dropdown-item>
          English
        </b-dropdown-item>

      </b-dropdown>


      @guest
      <div class="navbar-item"><a href="{{ route('login') }}" class="button is-primary">登入/註冊</a></div>

      @else
      <b-dropdown position="is-bottom-left" v-cloak>
        <a class="navbar-item" slot="trigger">
          <span>{{ Auth::user()->name }} &nbsp;</span>
          <b-icon pack="fa" icon="caret-down" size="is-small"></b-icon>
        </a>

        <b-dropdown-item has-link>
          <a href="#">
            <span class="icon"><i class="fa fa-fw fa-pencil-square-o" aria-hidden="true"></i></span>&nbsp;
            靈修＆筆記</a>
        </b-dropdown-item>
        <b-dropdown-item has-link>
          <a href="#">
            <span class="icon"><i class="fa fa-fw fa-book" aria-hidden="true"></i></span>&nbsp;
            書櫃</a>
        </b-dropdown-item>
        <b-dropdown-item has-link>
          <a href="#">
            <span class="icon"><i class="fa fa-fw fa-commenting" aria-hidden="true"></i></span>&nbsp;
            心得</a>
        </b-dropdown-item>
        <b-dropdown-item has-link>
          <a href="#">
            <span class="icon"><i class="fa fa-fw fa-bookmark" aria-hidden="true"></i></span>&nbsp;
            書摘</a>
        </b-dropdown-item>
        <b-dropdown-item has-link>
          <a href="#">
            <span class="icon"><i class="fa fa-fw fa-list" aria-hidden="true"></i></span>&nbsp;
            書單</a>
        </b-dropdown-item>
        <b-dropdown-item has-link>
          <a href="#">
            <span class="icon"><i class="fa fa-fw fa-bell" aria-hidden="true"></i></span>&nbsp;
            動態</a>
        </b-dropdown-item>
        <hr class="dropdown-divider">
        <b-dropdown-item has-link>
          <a href="#">
            <span class="icon"><i class="fa fa-fw fa-cog" aria-hidden="true"></i></span>&nbsp;
            帳號設定</a>
        </b-dropdown-item>
        <hr class="dropdown-divider">
        <b-dropdown-item has-link>
          <a href="{{ route('admin') }}">
            <span class="icon"><i class="fa fa-fw fa-cogs" aria-hidden="true"></i></span>&nbsp;
            控制台</a>
        </b-dropdown-item>
        <b-dropdown-item has-link>
          <a href="{{ route('logout') }}" onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
            <span class="icon"><i class="fa fa-fw fa-sign-out" aria-hidden="true"></i></span>&nbsp;
            登出</a>
            @include('_includes.forms.logout')
        </b-dropdown-item>


      </b-dropdown>

      {{-- <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link">{{ Auth::user()->name }}</a>
        <div class="navbar-dropdown is-right">
          <a href="#" class="navbar-item">
            <span class="icon"><i class="fa fa-fw fa-pencil-square-o" aria-hidden="true"></i></span>&nbsp;
            靈修＆筆記</a>
          <a href="#" class="navbar-item">
            <span class="icon"><i class="fa fa-fw fa-book" aria-hidden="true"></i></span>&nbsp;
            書櫃</a>
          <a href="#" class="navbar-item">
            <span class="icon"><i class="fa fa-fw fa-commenting" aria-hidden="true"></i></span>&nbsp;
            心得</a>
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
          <hr class="navbar-divider">
          <a href="{{ route('admin') }}" class="navbar-item">
            <span class="icon"><i class="fa fa-fw fa-cogs" aria-hidden="true"></i></span>&nbsp;
            管理區</a>
          <a href="{{ route('logout') }}" class="navbar-item" onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
            <span class="icon"><i class="fa fa-fw fa-sign-out" aria-hidden="true"></i></span>&nbsp;
            登出</a>
            @include('_includes.forms.logout')
        </div>
      </div> --}}
      @endguest
    </div>
  </div>
</nav>
