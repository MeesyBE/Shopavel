<div class="header">
    <button mat-icon-button="" class="mat-focus-indicator navigation-toggle-button mat-icon-button mat-button-base" x-on:click="sideBar = !sideBar">
        <span class="mat-button-wrapper">
            <mat-icon role="img" class="mat-icon notranslate mat-icon-no-color" aria-hidden="true" data-mat-icon-type="svg" data-mat-icon-name="menu">
                <svg viewBox="0 0 24 24" x="576" y="1392" fit="" height="100%" width="100%" preserveAspectRatio="xMidYMid meet" focusable="false">
                    <path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"></path>
                </svg>
            </mat-icon>
        </span>
        <span matripple="" class="mat-ripple mat-button-ripple mat-button-ripple-round"></span>
        <span class="mat-button-focus-overlay"></span>
    </button>
    <div class="spacer"></div>
    {{-- <search class="ng-tns-c103-215 search-appearance-bar">
      <button mat-icon-button="" class="mat-focus-indicator search-toggle-open mat-icon-button mat-button-base ng-tns-c103-215 ng-star-inserted">
        <span class="mat-button-wrapper">
          <mat-icon role="img" class="mat-icon notranslate mat-icon-no-color" aria-hidden="true" data-mat-icon-type="svg" data-mat-icon-name="search">
            <svg viewBox="0 0 24 24" x="816" y="1968" fit="" height="100%" width="100%" preserveAspectRatio="xMidYMid meet" focusable="false">
                <path d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0016 9.5 6.5 6.5 0 109.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path>
            </svg>
          </mat-icon>
        </span>
        <span matripple="" class="mat-ripple mat-button-ripple mat-button-ripple-round"></span><span class="mat-button-focus-overlay"></span></button>
    </search>
    <shortcuts>
      <button mat-icon-button="" class="mat-focus-indicator shortcuts-toggle mat-icon-button mat-button-base">
        <span class="mat-button-wrapper">
          <mat-icon role="img" class="mat-icon notranslate mat-icon-no-color" aria-hidden="true" data-mat-icon-type="svg" data-mat-icon-name="bookmarks">
            <svg viewBox="0 0 24 24" x="96" y="288" fit="" height="100%" width="100%" preserveAspectRatio="xMidYMid meet" focusable="false">
                <path d="M19 1H8.99C7.89 1 7 1.9 7 3h10c1.1 0 2 .9 2 2v13l2 1V3c0-1.1-.9-2-2-2zm-4 4H5c-1.1 0-2 .9-2 2v16l7-3 7 3V7c0-1.1-.9-2-2-2zm0 14.97l-5-2.15-5 2.15V7h10v12.97z"></path>
                <path opacity=".3" d="M5 19.97l5-2.15 5 2.15V7H5z"></path>
            </svg>
          </mat-icon>
        </span>
        <span matripple="" class="mat-ripple mat-button-ripple mat-button-ripple-round"></span>
        <span class="mat-button-focus-overlay"></span>
      </button>
    </shortcuts>
    <messages>
      <button mat-icon-button="" class="mat-focus-indicator messages-toggle mat-icon-button mat-button-base">
        <span class="mat-button-wrapper">
          <mat-icon role="img" class="mat-icon notranslate mat-icon-no-color ng-star-inserted" aria-hidden="true" data-mat-icon-type="svg" data-mat-icon-name="message">
            <svg viewBox="0 0 24 24" x="672" y="1392" fit="" height="100%" width="100%" preserveAspectRatio="xMidYMid meet" focusable="false">
                <path opacity=".3" d="M20 4H4v13.17L5.17 16H20V4zm-2 10H6v-2h12v2zm0-3H6V9h12v2zm0-3H6V6h12v2z"></path>
                <path d="M20 18c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2H4c-1.1 0-1.99.9-1.99 2L2 22l4-4h14zm-16-.83V4h16v12H5.17L4 17.17zM6 12h12v2H6zm0-3h12v2H6zm0-3h12v2H6z"></path>
            </svg>
          </mat-icon>
        </span>
        <span matripple="" class="mat-ripple mat-button-ripple mat-button-ripple-round"></span>
        <span class="mat-button-focus-overlay"></span>
      </button>
    </messages>
    <notifications>
      <button mat-icon-button="" class="mat-focus-indicator notifications-toggle mat-icon-button mat-button-base">
        <span class="mat-button-wrapper">
          <mat-icon role="img" class="mat-icon notranslate mat-icon-no-color ng-star-inserted" aria-hidden="true" data-mat-icon-type="svg" data-mat-icon-name="notifications_active">
            <svg viewBox="0 0 24 24" x="1104" y="1536" fit="" height="100%" width="100%" preserveAspectRatio="xMidYMid meet" focusable="false">
              <path opacity=".3" d="M12 6.5c-2.49 0-4 2.02-4 4.5v6h8v-6c0-2.48-1.51-4.5-4-4.5z"></path>
              <path d="M12 22c1.1 0 2-.9 2-2h-4c0 1.1.9 2 2 2zm6-11c0-3.07-1.63-5.64-4.5-6.32V4c0-.83-.67-1.5-1.5-1.5s-1.5.67-1.5 1.5v.68C7.64 5.36 6 7.92 6 11v5l-2 2v1h16v-1l-2-2v-5zm-2 6H8v-6c0-2.48 1.51-4.5 4-4.5s4 2.02 4 4.5v6zM7.58 4.08L6.15 2.65C3.75 4.48 2.17 7.3 2.03 10.5h2a8.445 8.445 0 013.55-6.42zm12.39 6.42h2c-.15-3.2-1.73-6.02-4.12-7.85l-1.42 1.43a8.495 8.495 0 013.54 6.42z">
              </path>
            </svg>
          </mat-icon>
        </span>
        <span matripple="" class="mat-ripple mat-button-ripple mat-button-ripple-round"></span>
        <span class="mat-button-focus-overlay"></span>
      </button>
    </notifications> --}}


      <button class="bg-white hover:bg-gray-100  text-black font-bold py-2 px-4 rounded-full w-10 h-10 pl-2">
        <span class="mat-icon material-icons mat-icon-no-color">
          logout
        </span>
        <span class="mat-button-focus-overlay"></span>
      </button>
      <form method="POST" action="{{ route('logout') }}" id="logout">
          @csrf
      </form>
</div>
