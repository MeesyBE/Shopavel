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

    <div  class="shopavel-vertical-navigation-aside-wrapper"  x-show="userInterface">

      <div class="shopavel-vertical-navigation-aside-item" style="">
          <div class="shopavel-vertical-navigation-item-wrapper">
              <div class="shopavel-vertical-navigation-item">
                  <mat-icon role="img" class="mat-icon notranslate shopavel-vertical-navigation-item-icon mat-icon-no-color" aria-hidden="true" data-mat-icon-type="svg" data-mat-icon-name="collection" data-mat-icon-namespace="heroicons_outline"><svg
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" fit="" height="100%" width="100%" preserveAspectRatio="xMidYMid meet" focusable="false">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">
                          </path>
                      </svg></mat-icon>
                  <div class="shopavel-vertical-navigation-item-title-wrapper">
                      <div class="shopavel-vertical-navigation-item-title">Test</div>
                  </div>
              </div>
          </div>

          <div class="shopavel-vertical-navigation-item-children">
              <div class="shopavel-vertical-navigation-basic-item">
                  <div class="shopavel-vertical-navigation-item-wrapper"><a class="shopavel-vertical-navigation-item" href="#">
                          <mat-icon role="img" class="mat-icon notranslate shopavel-vertical-navigation-item-icon mat-icon-no-color" aria-hidden="true" data-mat-icon-type="svg" data-mat-icon-name="shield-check" data-mat-icon-namespace="heroicons_outline">
                              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" fit="" height="100%" width="100%" preserveAspectRatio="xMidYMid meet" focusable="false">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                              </svg></mat-icon>
                          <div class="shopavel-vertical-navigation-item-title-wrapper">
                              <div class="shopavel-vertical-navigation-item-title">Test</div>
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
