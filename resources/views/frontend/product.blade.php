<style media="screen">
  img { height: 500px; width: 100%;}
  .object-fit_cover { object-fit: cover; width: 100%;}
  .carousel-open:checked + .carousel-item {
    position: static;
    opacity: 100;
  }
  .carousel-item {
    -webkit-transition: opacity 0.6s ease-out;
    transition: opacity 0.6s ease-out;
  }
  #carousel-1:checked ~ .control-1,
  #carousel-2:checked ~ .control-2,
  #carousel-3:checked ~ .control-3 {
    display: block;
  }
  .carousel-indicators {
    list-style: none;
    margin: 0;
    padding: 0;
    position: absolute;
    bottom: 2%;
    left: 0;
    right: 0;
    text-align: center;
    z-index: 10;
  }
  #carousel-1:checked ~ .control-1 ~ .carousel-indicators li:nth-child(1) .carousel-bullet,
  #carousel-2:checked ~ .control-2 ~ .carousel-indicators li:nth-child(2) .carousel-bullet,
  #carousel-3:checked ~ .control-3 ~ .carousel-indicators li:nth-child(3) .carousel-bullet {
    color: #2b6cb0;  /*Set to match the Tailwind colour you want the active one to be */
  }
</style>
<div class="flex flex-wrap overflow-hidden m-4">
    <div class="w-full overflow-hidden md:w-full lg:w-1/2 xl:w-1/2">
        <div class="rounded border-1 bg-gray-100 p-4 m-2 shadow-md">

          <div class="carousel relative shadow-2xl bg-white">
          	<div class="carousel-inner relative overflow-hidden w-full">
          	  <!--Slide 1-->
              @php $ic = 1; @endphp
              @foreach ($product->images as $image)
            		<input class="carousel-open" type="radio" id="carousel-{{$ic}}" name="carousel" aria-hidden="true" hidden="" @if ($ic == 1) checked="checked" @endif >
            		<div class="carousel-item absolute opacity-0" style="height:50vh;">
            			<div class="block h-full w-full bg-indigo-500 text-white text-5xl text-center">
                    <div class="image">
                        <img class="object-fit_cover" src="/storage/{{ $image->image_path}}" alt="">
                    </div>
                  </div>
            		</div>
                @for ($i=1; $i <= count($product->images); $i++)
                  @if ($ic-1 == $i && $ic-1 != 0)
                    <label for="carousel-{{$i}}" class="prev control-{{$ic}} w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
                  @endif
                  @if ($ic+1 == $i)
                    <label for="carousel-{{$i}}" class="next control-{{$ic}} w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>
                  @endif
                @endfor
                @php $ic++; @endphp
              @endforeach

          		<!-- Add additional indicators for each slide-->
          		<ol class="carousel-indicators">
                @for ($i=1; $i <= count($product->images); $i++)
                  <li class="inline-block mr-3">
            				<label for="carousel-{{$i}}" class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
            			</li>
                @endfor
          		</ol>

          	</div>
          </div>
        </div>
    </div>
    <div class="w-full overflow-hidden md:w-full lg:w-1/2 xl:w-1/2">
        <div class="rounded border-1 bg-gray-100 p-4 m-2 shadow-md">
            <center>
              <h5>{{ $product->product_name }}</h5>
              <b>{{ $product->price->product_price ?? '0.00' }}</b><br/>
                <button class="bg-purple-800 text-white px-4 py-2 rounded" name="button">Add to cart</button>
            </center>
        </div>
    </div>
</div>
