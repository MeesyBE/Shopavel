@extends('layouts.shopavel', ['title' => 'Documentation', 'subtitle' => 'small docs'])
@section('content')




<div class="">

    {{-- FORMS --}}
    <div class="pl-8">
        <h1>FORMS</h1>
    </div>


    <form class="bg-white rounded px-8 pt-6 pb-8 mb-4">
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                Username
            </label>
            <input class="border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-indigo-800" type="text" placeholder="">
        </div>
        <div class="mb-6">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                Password
            </label>
            <input class="border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-indigo-800" type="" placeholder="******************">
            <p class="text-red-500 text-xs italic">Please choose a password.</p>
        </div>
        <div class="flex items-center justify-between">
            <button class="bg-indigo-700 hover:bg-indigo-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                Sign In
            </button>
            <a class="inline-block align-baseline font-bold text-sm text-indigo-700 hover:text-indigo-500" href="#">
                Forgot Password?
            </a>
        </div>
    </form>

    <form class="w-full px-8">
      <div class="flex items-center border-2 rounded border-gray-200 focus:border-indigo-500 py-2">
        <input class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2" placeholder="Jane Doe" aria-label="Full name">
        <button class="flex-shrink-0 bg-indigo-700 hover:bg-indigo-500 border-indigo-700 hover:border-indigo-500 text-sm text-white border-4 py-1 px-2 rounded" type="button">
          Sign Up
        </button>
        <button class="flex-shrink-0 border-transparent border-4 text-indigo-500 hover:text-indigo-800 text-sm py-1 px-2 rounded" type="button">
          Cancel
        </button>
      </div>
      <div class="flex items-center border-2 mt-4 border-gray-200 focus:border-indigo-500 py-2">
        <input class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2" placeholder="City" aria-label="Full name">
        <button class="flex-shrink-0 bg-white text-sm text-indigo-700 mr-4" type="button">
          <span class="material-icons">location_city</span>
        </button>
      </div>
    </form>


</div>

<div class="p-8">
    <h1>BUTTONS</h1>
    <button class="bg-indigo-700 hover:bg-indigo-500 text-white font-bold py-2 px-4 border-b-4 border-indigo-800 hover:border-indigo-700 rounded">
        Button 3D
    </button>
    <br />
    <br />
    <button class="bg-indigo-700 hover:bg-indigo-500 text-white font-bold py-2 px-4 rounded">
        Button
    </button>
    <br />
    <br />
    <button class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">
        <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
            <path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z" /></svg>
        <span>Download</span>
    </button>
    <br />
    <h4>icon circle + hover circle</h4>
    <br />

    {{-- <br/>
<br/> --}}

    <button class="bg-indigo-700 hover:bg-indigo-500 text-white font-bold py-2 px-4 rounded-full w-10 h-10 m-0 pl-2">
        <span class="material-icons">
            home
        </span>
    </button>
    <br />
    <h4>icon only + hover circle</h4>
    <br />

    <button class="bg-white hover:bg-gray-100  text-black font-bold py-2 px-4 rounded-full w-10 h-10 pl-2">
        <span class="material-icons">
            home
        </span>
    </button>
    <br />
    <h4>Paginate</h4>
    <br />
    <div class="inline-flex">
        <button class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded-l">
            Prev
        </button>
        <button class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded-r">
            Next
        </button>
    </div>

    <div class="inline-flex">
        <button class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded-l">
            Prev
        </button>
        <button class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4">
            1
        </button>
        <button class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4">
            2
        </button>
        <button class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4">
            3
        </button>
        <button class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded-r">
            Next
        </button>
    </div>


</div>


<div class="p-8">
  <div class="bg-white text-right py-4 lg:px-4">
    <div class="p-2 bg-indigo-800 items-center text-indigo-100 leading-none lg:rounded-full flex lg:inline-flex" role="alert">
      <span class="flex rounded-full bg-indigo-500 uppercase px-2 py-1 text-xs font-bold mr-3">New</span>
      <span class="font-semibold mr-2 text-left flex-auto">Get the coolest t-shirts from our brand new store</span>
      <svg class="fill-current opacity-75 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z"/></svg>
    </div>
  </div>
</div>





@stop
