<div class="shopavel-vertical-navigation bg-indigo-800 theme-dark shopavel-vertical-navigation-layout" x-show="sideBar">
    <div class="shopavel-vertical-navigation-wrapper" >
        <div class="shopavel-vertical-navigation-header ">
          <div class="logo">
            <img src="/admin/img/logo-white.png" style="width: 100%;">
          </div>
        </div>
        <div shopavelscrollbar="" class="shopavel-vertical-navigation-content">
            @include('layouts.components.nav')
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

    <div  class="shopavel-vertical-navigation-aside-wrapper"  x-show="userInterface">

      <div class="shopavel-vertical-navigation-aside-item" style="">
          <div class="shopavel-vertical-navigation-item-wrapper">
              <div class="shopavel-vertical-navigation-item">
                  <span class="material-icons">
                    settings
                  </span>
                  <div class="shopavel-vertical-navigation-item-title-wrapper">
                      <div class="shopavel-vertical-navigation-item-title">Settings</div>
                  </div>
              </div>
          </div>


          <div class="shopavel-vertical-navigation-item-children">
              <div class="shopavel-vertical-navigation-basic-item">
                  <div class="shopavel-vertical-navigation-item-wrapper">
                      <a class="shopavel-vertical-navigation-item" href="{{ route('users.index') }}">
                        <span class="material-icons shopavel-vertical-navigation-item-icon">
                          people
                        </span>
                        <div class="shopavel-vertical-navigation-item-title-wrapper">
                            <div class="shopavel-vertical-navigation-item-title">Users</div>
                        </div>
                      </a>
                  </div>
              </div>
          </div>


          <div class="shopavel-vertical-navigation-item-children">
              <div class="shopavel-vertical-navigation-basic-item">
                  <div class="shopavel-vertical-navigation-item-wrapper">
                      <a class="shopavel-vertical-navigation-item" href="{{ route('settings.index') }}">
                        <span class="material-icons shopavel-vertical-navigation-item-icon">
                          miscellaneous_services
                        </span>
                        <div class="shopavel-vertical-navigation-item-title-wrapper">
                            <div class="shopavel-vertical-navigation-item-title">Site setting</div>
                        </div>
                      </a>
                  </div>
              </div>
          </div>


      </div>
    </div>
</div>
