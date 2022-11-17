<div class="shopavel-vertical-navigation bg-indigo-800 theme-dark shopavel-vertical-navigation-layout" x-show="sideBar">
    <div class="shopavel-vertical-navigation-wrapper" >
        <div class="shopavel-vertical-navigation-header ">
          <div class="logo">
            <img src="/adminfiles/img/logo-white.png" style="width: 100%;">
          </div>
        </div>
        <div shopavelscrollbar="" class="shopavel-vertical-navigation-content">
            @include('layouts.components.nav.level-one')
        </div>

        <div class="shopavel-vertical-navigation-footer">
                <a href="{{ route('users.profile') }}" class="user">
                    <user>
                      <button aria-haspopup="true" class="icon-button">
                        <span class="avatar">
                          <img src="" class="" />
                          <span class="status online"></span>
                        </span>
                      </button>
                    </user>
                    <div class="info">
                        <div class="name text-indigo-50">{{ Auth::user()->name }}</div>
                        <div class="email text-indigo-300">{{ Auth::user()->email }}</div>
                    </div>
                </a>
        </div>
    </div>
    @include('layouts.components.nav.settings')
    @include('layouts.components.nav.seo')
    @include('layouts.components.nav.content')
    @include('layouts.components.nav.layout')
    @include('layouts.components.nav.sales')


</div>
