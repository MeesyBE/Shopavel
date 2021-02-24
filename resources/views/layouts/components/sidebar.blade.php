<div class="shopavel-vertical-navigation bg-indigo-800 theme-dark ng-tns-c43-214 shopavel-vertical-navigation-mode-side shopavel-vertical-navigation-position-left shopavel-vertical-navigation-appearance-futuristic shopavel-vertical-navigation-opened shopavel-vertical-navigation-animations-enabled"
  style="visibility: visible;" x-show="sideBar">
    <div class="shopavel-vertical-navigation-wrapper" >
        <div class="shopavel-vertical-navigation-header ng-tns-c43-214">
            <div shopavelverticalnavigationheader="" class="ng-tns-c43-214">
                <div class="logo">
                  <img src="/admin/img/logo-white.png" style="width: 100%;">
                </div>
            </div>
        </div>
        <div shopavelscrollbar="" class="shopavel-vertical-navigation-content ng-tns-c43-214 ps ps--active-y">
            @include('layouts.components.nav')
        </div>
        <div class="shopavel-vertical-navigation-footer ng-tns-c43-214">
            <div shopavelverticalnavigationfooter="" class="ng-tns-c43-214">
                <a href="{{ route('users.profile') }}" class="user">
                    <user>
                      <button aria-haspopup="true" mat-icon-button="" class="mat-focus-indicator mat-menu-trigger icon-button mat-icon-button mat-button-base">
                        <span class="mat-button-wrapper">
                          <span class="avatar">
                            <img src="" class="ng-star-inserted" />
                            <span class="status online"></span>
                          </span>
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
<script>
    function sidaBar() {
        return {
            show: true,
            open() { this.show = true },
            close() { this.show = false },
            isOpen() { return this.show === true },
        }
    }
</script>
