<div class="shopavel-vertical-navigation bg-indigo-800 theme-dark ng-tns-c43-214 shopavel-vertical-navigation-mode-side shopavel-vertical-navigation-position-left shopavel-vertical-navigation-appearance-futuristic shopavel-vertical-navigation-opened shopavel-vertical-navigation-animations-enabled"
  style="visibility: visible;">
    <div class="shopavel-vertical-navigation-wrapper ng-tns-c43-214">
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
                <a href="{{ route('users.me') }}" class="user">
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

</div>
