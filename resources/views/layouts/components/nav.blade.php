<div class="shopavel-vertical-navigation-group-item">
    <div class="shopavel-vertical-navigation-item-wrapper">
        <div class="shopavel-vertical-navigation-item">
            <div class="shopavel-vertical-navigation-item-title-wrapper">
                <div class="shopavel-vertical-navigation-item-title">Menu</div>
            </div>
        </div>
    </div>

    <div class="shopavel-vertical-navigation-basic-item">
        <div class="shopavel-vertical-navigation-item-wrapper">
            <a class="shopavel-vertical-navigation-item shopavel-vertical-navigation-item{{ Request::is('*dashboard*') ? '-active' : '' }}" href="/admin/dashboard">
                <mat-icon role="img" class="mat-icon notranslate shopavel-vertical-navigation-item-icon mat-icon-no-color" aria-hidden="true" data-mat-icon-type="svg" data-mat-icon-name="chart-pie" data-mat-icon-namespace="heroicons_outline">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" fit="" height="100%" width="100%" preserveAspectRatio="xMidYMid meet" focusable="false">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path>
                    </svg>
                </mat-icon>
                <div class="shopavel-vertical-navigation-item-title-wrapper">
                    <div class="shopavel-vertical-navigation-item-title">Dashboard</div>
                </div>
            </a>
        </div>
    </div>


    <div class="shopavel-vertical-navigation-basic-item">
        <div class="shopavel-vertical-navigation-item-wrapper">
            <a class="shopavel-vertical-navigation-item shopavel-vertical-navigation-item{{ Request::is('*pages*') ? '-active' : '' }}" href="/admin/pages">
                <mat-icon role="img" class="mat-icon notranslate shopavel-vertical-navigation-item-icon mat-icon-no-color" aria-hidden="true" data-mat-icon-type="svg" data-mat-icon-name="document-duplicate"
                  data-mat-icon-namespace="heroicons_outline">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" fit="" height="100%" width="100%" preserveAspectRatio="xMidYMid meet" focusable="false">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V15a2 2 0 01-2 2h-2M8 7H6a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2v-2"></path>
                    </svg>
                </mat-icon>
                <div class="shopavel-vertical-navigation-item-title-wrapper">
                    <div class="shopavel-vertical-navigation-item-title">Pages</div>
                </div>
            </a>
        </div>
    </div>



    <div class="shopavel-vertical-navigation-basic-item">
        <div class="shopavel-vertical-navigation-item-wrapper">
            <a class="shopavel-vertical-navigation-item shopavel-vertical-navigation-item{{ Request::is('*products*') ? '-active' : '' }}" href="{{ route('products.index') }}">
                <span class="material-icons shopavel-vertical-navigation-item-icon">
                    shopping_cart
                </span>
                <div class="shopavel-vertical-navigation-item-title-wrapper">
                    <div class="shopavel-vertical-navigation-item-title">Products</div>
                </div>
            </a>
        </div>
    </div>

    <div class="shopavel-vertical-navigation-basic-item">
        <div class="shopavel-vertical-navigation-item-wrapper">
            <a class="shopavel-vertical-navigation-item shopavel-vertical-navigation-item{{ Request::is('*plugins*') ? '-active' : '' }}" href="{{ route('plugins.index') }}">
                <span class="material-icons shopavel-vertical-navigation-item-icon">
                    extension
                </span>
                <div class="shopavel-vertical-navigation-item-title-wrapper">
                    <div class="shopavel-vertical-navigation-item-title">Plugins</div>
                </div>
            </a>
        </div>
    </div>


    <div class="" @click="userInterface = !userInterface" @click.away="userInterface = false">
        <div class="shopavel-vertical-navigation-aside-item">
            <div class="shopavel-vertical-navigation-item-wrapper">
                <div class="shopavel-vertical-navigation-item shopavel-vertical-navigation-item">
                    <mat-icon role="img" class="mat-icon notranslate shopavel-vertical-navigation-item-icon mat-icon-no-color" aria-hidden="true" data-mat-icon-type="svg" data-mat-icon-name="collection" data-mat-icon-namespace="heroicons_outline">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" fit="" height="100%" width="100%" preserveAspectRatio="xMidYMid meet" focusable="false">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">
                            </path>
                        </svg></mat-icon>
                    <div class="shopavel-vertical-navigation-item-title-wrapper">
                        <div class="shopavel-vertical-navigation-item-title">
                            Test
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>





</div>
