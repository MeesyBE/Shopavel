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
                <span class="material-icons shopavel-vertical-navigation-item-icon">dashboard</span>
                <div class="shopavel-vertical-navigation-item-title-wrapper">
                    <div class="shopavel-vertical-navigation-item-title">Dashboard</div>
                </div>
            </a>
        </div>
    </div>


    <div class="shopavel-vertical-navigation-basic-item">
        <div class="shopavel-vertical-navigation-item-wrapper">
            <a class="shopavel-vertical-navigation-item shopavel-vertical-navigation-item{{ Request::is('*pages*') ? '-active' : '' }}" href="/admin/pages">
                <span class="material-icons shopavel-vertical-navigation-item-icon">file_copy</span>
                <div class="shopavel-vertical-navigation-item-title-wrapper">
                    <div class="shopavel-vertical-navigation-item-title">Pages</div>
                </div>
            </a>
        </div>
    </div>



    <div class="shopavel-vertical-navigation-basic-item">
        <div class="shopavel-vertical-navigation-item-wrapper">
            <a class="shopavel-vertical-navigation-item shopavel-vertical-navigation-item{{ Request::is('*products*') ? '-active' : '' }}" href="{{ route('products.index') }}">
                <span class="material-icons shopavel-vertical-navigation-item-icon">shopping_cart</span>
                <div class="shopavel-vertical-navigation-item-title-wrapper">
                    <div class="shopavel-vertical-navigation-item-title">Products</div>
                </div>
            </a>
        </div>
    </div>


    <div class="shopavel-vertical-navigation-basic-item">
        <div class="shopavel-vertical-navigation-item-wrapper">
            <a class="shopavel-vertical-navigation-item shopavel-vertical-navigation-item{{ Request::is('*plugins*') ? '-active' : '' }}" href="{{ route('plugins.index') }}">
                <span class="material-icons shopavel-vertical-navigation-item-icon">extension</span>
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
                  <span class="material-icons shopavel-vertical-navigation-item-icon">settings</span>
                  <div class="shopavel-vertical-navigation-item-title-wrapper">
                      <div class="shopavel-vertical-navigation-item-title">Settings</div>
                    </div>
                </div>
            </div>
        </div>

    </div>





</div>
