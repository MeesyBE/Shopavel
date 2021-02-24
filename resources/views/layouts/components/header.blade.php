<div class="header bg-white shadow-md">
    <button mat-icon-button="" class="bg-white hover:bg-gray-100  text-gray-700 font-bold py-2 px-4 rounded-full w-10 h-10 pl-2" x-on:click="sideBar = !sideBar">
        <span class="material-icons">
          menu
        </span>
    </button>
    <div class="spacer"></div>
      <button type="submit" class="bg-white hover:bg-gray-100 text-gray-700 font-bold py-2 px-4 rounded-full w-10 h-10 pl-2" form="logout">
        <span class="material-icons">
          logout
        </span>
      </button>
      <form method="POST" action="{{ route('logout') }}" id="logout">
          @csrf
      </form>
</div>
