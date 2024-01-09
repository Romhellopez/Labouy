<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Labouy</title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>

  <link href="https://cdn.jsdelivr.net/npm/daisyui@4.5.0/dist/full.min.css" rel="stylesheet" type="text/css" />
<script src="https://cdn.tailwindcss.com"></script>

  <link href="https://cdn.jsdelivr.net/npm/daisyui@4.5.0/dist/full.min.css" rel="stylesheet" type="text/css" />
<script src="https://cdn.tailwindcss.com"></script>

  
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">  
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">                
    <link rel="stylesheet" href="css/bootstrap.min.css">                                     
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
    <link rel="stylesheet" type="text/css" href="css/datepicker.css"/>
    <link rel="stylesheet" href="css/tooplate-style.css">     
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.5.0/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>      
  @vite('resources/css/app.css')
</head>

<body>

  <div class="tm-section tm-bg-img" id="tm-section-1">
    <div class="tm-bg-white ie-container-width-fix-2">
        <div class="container ie-h-align-center-fix">
            <div class="row">
                <div class="col-xs-12 ml-auto mr-auto ie-container-width-fix">
                    <form action="index.html" method="get" class="tm-search-form tm-section-pad-2">
                        <div class="form-row tm-search-form-row">
                            <div class="form-group tm-form-element tm-form-element-100">
                                <i class="fa fa-map-marker fa-2x tm-form-element-icon"></i>
                                <input name="city" type="text" class="form-control" id="inputCity" placeholder="Type your destination...">
                            </div>
                            <div class="form-group tm-form-element tm-form-element-50">
                                <i class="fa fa-calendar fa-2x tm-form-element-icon"></i>
                                <input name="check-in" type="text" class="form-control" id="inputCheckIn" placeholder="Check In">
                            </div>
                            <div class="form-group tm-form-element tm-form-element-50">
                                <i class="fa fa-calendar fa-2x tm-form-element-icon"></i>
                                <input name="check-out" type="text" class="form-control" id="inputCheckOut" placeholder="Check Out">
                            </div>
                        </div>
                        <div class="form-row tm-search-form-row">
                            <div class="form-group tm-form-element tm-form-element-2">                                            
                                <select name="adult" class="form-control tm-select" id="adult">
                                    <option value="">Adult</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>s
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                 
                                </select>
                                <i class="fa fa-2x fa-user tm-form-element-icon"></i>
                            </div>
                            <div class="form-group tm-form-element tm-form-element-2">                                            
                                <select name="children" class="form-control tm-select" id="children">
                                    <option value="">Children</option>
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                 
                                </select>
                                <i class="fa fa-user tm-form-element-icon tm-form-element-icon-small"></i>
                            </div>
                            <div class="form-group tm-form-element tm-form-element-2">
                                <select name="room" class="form-control tm-select" id="room">
                                    <option value="">Room</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>s
                                </select>
                                <i class="fa fa-2x fa-bed tm-form-element-icon"></i>
                            </div>
                            <div class="form-group tm-form-element tm-form-element-2">
                                <button type="submit" class="btn bg-[#01DADA]  hover:bg-yellow-300 tm-btn-search"><span class="">Check Availability</span></button>
                            </div>
                          </div>
                          <div class="form-row clearfix pl-2 pr-2 tm-fx-col-xs">
                              <p class="tm-margin-b-0">La Bouy makes your travel comfortable.</p>
                              <a href="#" class="ie-10-ml-auto ml-auto mt-1 tm-font-semibold text-[#01DADA]">Need Help?</a>
                          </div>
                    </form>
                </div>                        
            </div>      
        </div>
    </div>                  
</div>

    
    
    <div class='bg-gray-100'>
    <div class='flex justify-center'>
                    <h1 class='lg:mt-12 mt-10 text-3xl font-bold text-center'>
                        Tourist spots in Siargao
                    </h1>
                </div>
        <div class='md:max-w-[1780px] max-w-[600px] m-auto w-full h-full flex justify-center items-center '>
              
    
                
                <div class='mt-12 grid sm:grid-cols-2 lg:grid-cols-8 gap-5 mb-10'>
    
                  
                    <div class='grid grid-cols-1 '>
                      <img class='w-[170px] h-[170px] rounded-full hover:animate-bounce' src="{{ asset('assets/images/cloud91.png')}}"  />
                    <span class='text-xl mt-2 text-center'>Cloud 9</span>
                    </div>
                   
                    <div class='grid grid-cols-1 '>
                    <img class='w-[170px] h-[170px] rounded-full hover:animate-bounce' src="{{ asset('assets/images/daku91.png')}}"  />
                    <span class='text-xl mt-2 text-center'>Daku Islands</span>
    
                    </div>
                    <div class='grid grid-cols-1 '>
                      <img class='w-[170px] h-[170px] rounded-full hover:animate-bounce' src="{{ asset('assets/images/guyam91.png')}}"  />
                    <span class='text-xl mt-2 text-center'>Guyam Island</span>
                    </div>
    
                    <div class='grid grid-cols-1 '>
                      <img class='w-[170px] h-[170px] rounded-full hover:animate-bounce' src="{{ asset('assets/images/maasin91.png')}}"  />
                    <span class='text-xl mt-2 text-center'>Maasin River</span>
                    </div>
    
                    <div class='grid grid-cols-1 '>
                      <img class='w-[170px] h-[170px] rounded-full hover:animate-bounce' src="{{ asset('assets/images/naked91.png')}}"  />
                    <span class='text-xl mt-2 text-center'>Naked Island</span>
                    </div>
    
                    <div class='grid grid-cols-1 '>
                      <img class='w-[170px] h-[170px] rounded-full hover:animate-bounce' src="{{ asset('assets/images/magpupungko91.png')}}"  />
                    <span class='text-xl mt-2 text-center'>Magpupungko</span>
                    </div>
    
                    <div class='grid grid-cols-1 '>
                      <img class='w-[170px] h-[170px] rounded-full hover:animate-bounce' src="{{ asset('assets/images/sugba91.png')}}"  />
                    <span class='text-xl mt-2 text-center'>Sugba Lagoon</span>
                    </div>
                    <div class='grid grid-cols-1 '>
                      <img class='w-[170px] h-[170px] rounded-full hover:animate-bounce' src="{{ asset('assets/images/taktak91.png')}}"  />
                    <span class='text-xl mt-2 text-center'>Taktak Falls</span>
                    </div>
    
                </div>
            </div>
    
            <div class='md:max-w-[1680px] max-w-[600px] m-auto w-full h-full flex justify-center items-center bg-yellow-300 p-2 rounded-xl ' >
                  <div class='flex gap-5'>
    
                  <div class=' grid sm:grid-cols-1 lg:grid-cols-4 gap-5'>
    
                    <div class='grid grid-cols-1'>
                      <h2 class='text-2xl mt-3 font-semibold ml-10 '><b>LA BOUY</b><br /> makes it easier for everyone to travel</h2>
                    </div>
                    <div class='grid grid-cols-1'>
                    <div class='bg-yellow-300  p-10 rounded-xl flex gap-5' >
                      <img src="{{ asset('assets/images/trend.svg')}}" class='w-[50px]' />
                      <p class='text-lg text-black'>Get alerts if hotel prices drop</p>
                    </div>
                    </div>
                    <div class='grid grid-cols-1'>
                    <div class='bg-yellow-300 p-10 rounded-xl flex gap-5' >
                      <img src="{{ asset('assets/images/hotel.svg')}}" class='w-[50px]' />
                      <p class='text-lg text-black'>Bundle activities + hotel to save</p>
                    </div>
                    </div>
                    <div class='grid grid-cols-1'>
                    <div class='bg-yellow-300 p-10 rounded-xl flex gap-5' >
                      <img src="{{ asset('assets/images/points.svg')}}" class='w-[50px]' />
                      <p class='text-lg text-black'>Earn points for your next booking</p>
                    </div>
                    </div>
    
                    </div>
                 
                  </div>
    
    
                </div>
               
    
    
    </div>
    </div>  
    </div>    

   
   
  
   <div class='md:max-w-[1380px] max-w-[600px]  m-auto w-full h-full flex justify-between items-center' >
  <div class='grid grid-cols-1 lg:grid-cols-4'>
  
  <div class="drawer lg:drawer-open mr-20 shadow-sm">
    <input id="my-drawer-2" type="checkbox" class="drawer-toggle" />
    <div class="drawer-content flex flex-col bg-base shadow-sm items-center justify-center">
      
      <label  class="btn btn-outline drawer-button lg:hidden mt-5">❯</label>
    
    </div> 
    <div class="drawer-side">
      <label htmlFor="my-drawer-2" aria-label="close sidebar" class="drawer-overlay"></label> 
      <ul class="menu p-4 w-80 min-h-full bg-base-100 text-base-content">
        
      <fieldset>
        <h3 class='text-bold text-xl'>Filter Hotel Near</h3>
    <li>
    <div>
      <input type="radio" id="cloud9" name="drone" class='radio radio-accent' value="cloud9" />
      <label for="cloud9">Cloud 9 Beach</label>
    </div>
    </li>
    <li>
    <div>
      <input type="radio" id="daku" name="drone" class='radio radio-accent' value="daku" />
      <label for="daku">Daku Island</label>
    </div>
    </li>
    <li>
    <div>
      <input type="radio" id="guyam" name="drone" class='radio radio-accent' value="guyam" />
      <label for="guyam">Guyam Island</label>
    </div>
    </li>
    <li>
    <div>
      <input type="radio" id="naked" name="drone"  class='radio radio-accent' value="naked" />
      <label for="naked">Naked Island</label>
    </div>
    </li>
    <li>
    <div>
      <input type="radio" id="magpupungko" name="drone" class='radio radio-accent' value="magpupungko" />
      <label for="magpupungko">Magpupungko Rock Pool</label>
    </div>
    </li>
    <li>
    <div>
      <input type="radio" id="maasin" name="drone" class='radio radio-accent' value="maasin" />
      <label for="maasin">Maasin River</label>
    </div>
    </li>
    <li>
    <div>
      <input type="radio" id="sugba" name="drone" class='radio radio-accent' value="sugba" />
      <label for="sugba">Sugba Lagoon</label>
    </div>
    </li>
    <li>
    <div>
      <input type="radio" id="taktak" name="drone" class='radio radio-accent' value="taktak" />
      <label for="taktak">Taktak Falls</label>
    </div>
    </li>
  
     <hr class='divide-stone-400 my-3'/>
  
     <h3 class='text-bold text-xl'>Filter by Type</h3>
        
        <li>
      <div>
        <input type="radio" id="room" name="drone" class='radio radio-accent' value="room" />
        <label for="room">Room</label>
      </div>
      </li>
    
      <li>
      <div>
        <input type="radio" id="hut" name="drone"  class='radio radio-accent' value="hut" />
        <label for="hut">Hut</label>
      </div>
      </li>
    
      <li>
      <div>
        <input type="radio" id="cabin" name="drone" class='radio radio-accent' value="cabin" />
        <label for="cabin">Cabin</label>
      </div>
      </li>
  </fieldset>
  
      </ul>
    </div>
  </div>
  <div class='col-span-3 mt-5'>
  <div id='hotel1' class="card lg:card-side bg-base-100 shadow-xl my-2 mx-3">
   
   <figure class='px-2 py-2'>
    <div id='hotel1' class="carousel w-[300px]">
    <div id="slide1" class="carousel-item relative w-full">
      <img src="{{ asset('assets/images/ocean1.png')}}" class="w-full h-[300px]" />
      <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
        
      </div>
    </div> 
   
    </figure>
    
    <div class="card-body">
      <ul class='flex justify-between items-center'>
      <li class='mr-4'><h2 class="card-title font-bold text-xl">101 Ocean Beach</h2>
      <p class='text-gray-400'>0.3km from Cloud9 Beach</p>
      <h3 class='text-xl font-bold mt-10'>P7,156</h3>
      
      <p class='text-gray-400'>include taxes and fees</p>
      </li>
      <li>    
          <div class='flex gap-2  mt-2'>
              <img src="{{ asset('assets/images/wifi91.png')}}" class='h-[20px] w-[20px]'/>
              <p>Free Wifi</p>
          </div>
  
          <div class='flex gap-2  mt-2'>
              <img src="{{ asset('assets/images/pet91.png')}}" class='h-[20px] w-[20px]'/>
              <p>Pet Friendly</p>
          </div>
  
          <div class='flex gap-2 mt-2'>
              <img src="{{ asset('assets/images/parking91.png')}}" class='h-[20px] w-[20px]'/>
              <p>Free Parking</p>
          </div>
  
          <div class='flex gap-2 mt-2'>
              <img src="{{ asset('assets/images/snow91.png')}}" class='h-[20px] w-[20px]'/>
              <p>Airconditioned Rooms</p>
          </div>
  
          <div class='flex gap-2 mt-2'>
              <img src="{{ asset('assets/images/shower91.png')}}" class='h-[20px] w-[20px]'/>
              <p>Private Bathroom</p>
          </div>
  
      </li>
      <li class='md:flex-row'>
 
      </li>
      </ul>
      <div class='hotel-nav'>
      <div class="card-actions justify-end mt-5">
      <nav><button type="button" class="text-white bg-gradient-to-r from-cyan-400 via-cyan-500 to-cyan-600 hover:bg-gradient-to-br focus:ring-4 
      focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-semibold rounded-lg texext-sm px-5 py-3.5 text-center me-3 mb-3">
         <a  href='/ocean101'>Check Rooms</a> </button></nav> 
      </div>
      </div>
      <Outlet />
    </div>
    </div>
  
    <div class='col-span-3'>
  <div id='hotel2' class="card lg:card-side bg-base-100 shadow-xl my-2 mx-3">

    <figure class='px-2 py-2'>
      <div id='hotel1' class="carousel w-[300px]">
      <div id="slide1" class="carousel-item relative w-full">
        <img src="{{ asset('assets/images/hillside1.png')}}" class="w-full h-[300px]" />
        <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
          
        </div>
      </div> 
     
      </figure>
    
    <div class="card-body">
      <ul class='flex justify-between items-center'>
      <li class='mr-4'><h2 class="card-title font-bold">Hillside View</h2>
      <p class='text-gray-400'>5km from near beach</p>
      <h3 class='text-xl font-bold mt-10'>P10,487</h3>
      
      <p class='text-gray-400'>include taxes and fees</p>
      </li>
      <li>
           <div class='flex gap-2 mt-1'>
          <img src="{{ asset('assets/images/breakfast91.png')}}" class='h-[20px] w-[20px]'/>
          <p>Breakfast included</p>
           </div>   
  
           <div class='flex gap-2 mt-1'>
            <img src="{{ asset('assets/images/pool91.png')}}" class='h-[20px] w-[20px]' />
            <p>Pool</p>
           </div>
          <div class='flex gap-2  mt-1'>
              <img src="{{ asset('assets/images/wifi91.png')}}" class='h-[20px] w-[20px]'/>
              <p>Free Wifi</p>
          </div>
  
          <div class='flex gap-2 mt-1'>
              <img src="{{ asset('assets/images/snow91.png')}}" class='h-[20px] w-[20px]'/>
              <p>Airconditioned Rooms</p>
          </div>
  
          <div class='flex gap-2 mt-1'>
              <img src="{{ asset('assets/images/shower91.png')}}" class='h-[20px] w-[20px]'/>
              <p>Private Bathroom</p>
          </div>
          <div class='flex gap-2 mt-1'>
              <img src="{{ asset('assets/images/pet91.png')}}" class='h-[20px] w-[20px]'/>
              <p>Pet Friendly</p>
          </div>
  
      </li>
      <li>
 
      </li>
      </ul>
      <div class="card-actions justify-end mt-5">
      <nav>
        <a href='/hillside'><button type="button" class="text-white bg-gradient-to-r from-cyan-400 via-cyan-500 to-cyan-600 hover:bg-gradient-to-br focus:ring-4 
      focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-semibold rounded-lg texext-sm px-5 py-3.5 text-center me-3 mb-3">Check Rooms</button></a></nav>
      </div>
      <Outlet />
    </div>
  </div>
  
  <div class='col-span-3'>
  <div id='hotel3' class="card lg:card-side bg-base-100 shadow-xl my-2 mx-3">

    <figure class='px-2 py-2'>
      <div id='hotel1' class="carousel w-[300px]">
      <div id="slide1" class="carousel-item relative w-full">
        <img src="{{ asset('assets/images/maya1.png')}}" class="w-full h-[300px]" />
        <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
          
        </div>
      </div> 
     
      </figure>
    
    <div class="card-body">
      <ul class='flex justify-between items-center'>
      <li class='mr-4'><h2 class="card-title font-bold">Maya Villa</h2>
      <p class='text-gray-400'>30km from Sugba Lagoon</p>
      <h3 class='text-xl font-bold mt-10'>P6,679</h3>
     
      <p class='text-gray-400'>include taxes and fees</p>
      </li>
      <li>
           
           <div class='flex gap-2 mt-1'>
            <img src="{{ asset('assets/images/pool91.png')}}" class='h-[20px] w-[20px]' />
            <p>Pool</p>
           </div>
          <div class='flex gap-2  mt-1'>
              <img src="{{ asset('assets/images/wifi91.png')}}" class='h-[20px] w-[20px]'/>
              <p>Free Wifi</p>
          </div>
          <div class='flex gap-2  mt-1'>
              <img src="{{ asset('assets/images/snow91.png')}}" class='h-[20px] w-[20px]'/>
              <p>Airconditioned Rooms</p>
          </div>
  
          <div class='flex gap-2 mt-1'>
            <img src="{{ asset('assets/images/golf91.png')}}" class='h-[20px] w-[20px]' />
            <p>Golf Course</p>
           </div>
          <div class='flex gap-2 mt-1'>
              <img src="{{ asset('assets/images/shower91.png')}}" class='h-[20px] w-[20px]'/>
              <p>Private Bathroom</p>
          </div>
          <div class='flex gap-2 mt-1'>
              <img src="{{ asset('assets/images/pet91.png')}}" class='h-[20px] w-[20px]'/>
              <p>Pet Friendly</p>
          </div>
  
      </li>
      <li>
 
      </li>
      </ul>
      <div class="card-actions justify-end mt-5">
      <nav>
      <a href= '/maya'>
      <button type="button" class="text-white bg-gradient-to-r from-cyan-400 via-cyan-500 to-cyan-600 hover:bg-gradient-to-br focus:ring-4 
      focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-semibold rounded-lg texext-sm px-5 py-3.5 text-center me-3 mb-3">Check Rooms</button>
      </a>
      </nav>
      </div>
      <Outlet />
    </div>
  </div>
  
  <div class='col-span-3'>
  <div id='hotel4' class="card lg:card-side bg-base-100 shadow-xl my-2 mx-3">

    <figure class='px-2 py-2'>
      <div id='hotel1' class="carousel w-[300px]">
      <div id="slide1" class="carousel-item relative w-full">
        <img src="{{ asset('assets/images/dahun1.png')}}" class="w-full h-[300px]" />
        <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
          
        </div>
      </div> 
     
      </figure>
    
    <div class="card-body">
      <ul class='flex justify-between items-center'>
      <li class='mr-4'><h2 class="card-title font-bold">Dahun Villas</h2>
      <p class='text-gray-400'>4.5km from Daku Island</p>
      <h3 class='text-xl font-bold mt-10'>P8,863</h3>
      
      <p class='text-gray-400'>include taxes and fees</p>
      </li>
      <li>
      <div class='flex gap-2  mt-1'>
              <img src="{{ asset('assets/images/breakfast91.png')}}" class='h-[20px] w-[20px]'/>
              <p>Breakfast included</p>
          </div>
         
          <div class='flex gap-2  mt-1'>
              <img src="{{ asset('assets/images/wifi91.png')}}" class='h-[20px] w-[20px]'/>
              <p>Free Wifi</p>
          </div>
          <div class='flex gap-2 mt-1'>
            <img src="{{ asset('assets/images/pool91.png')}}" class='h-[20px] w-[20px]' />
            <p>Pool</p>
           </div>
          <div class='flex gap-2 mt-1'>
              <img src="{{ asset('assets/images/shower91.png')}}" class='h-[20px] w-[20px]'/>
              <p>Private Bathroom</p>
          </div>
          <div class='flex gap-2 mt-1'>
              <img src="{{ asset('assets/images/pet91.png')}}" class='h-[20px] w-[20px]'/>
              <p>Pet Friendly</p>
          </div>
          <div class='flex gap-2 mt-1'>
              <img src="{{ asset('assets/images/parking91.png')}}" class='h-[20px] w-[20px]'/>
              <p>Free Parking</p>
          </div>
  
      </li>
      <li>
 
      </li>
      </ul>
      <div class="card-actions justify-end mt-5">
      <a type="button" class="text-white bg-gradient-to-r from-cyan-400 via-cyan-500 to-cyan-600 hover:bg-gradient-to-br focus:ring-4 
      focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-semibold rounded-lg texext-sm px-5 py-3.5 text-center me-3 mb-3" href='/dahun'>Check Rooms</a>
      </div>
    </div>
  </div>
  
  <div class='col-span-3'>
  <div id='hotel5' class="card lg:card-side bg-base-100 shadow-xl my-2 mx-3">

    <figure class='px-2 py-2'>
      <div id='hotel1' class="carousel w-[300px]">
      <div id="slide1" class="carousel-item relative w-full">
        <img src="{{ asset('assets/images/soelian1.png')}}" class="w-full h-[300px]" />
        <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
          
        </div>
      </div> 
     
      </figure>
    
    <div class="card-body">
      <ul class='flex justify-between items-center'>
      <li class='mr-4'><h2 class="card-title font-bold">Soeliana Resort</h2>
      <p class='text-gray-400'>1km from Maasin River</p>
      <h3 class='text-xl font-bold mt-10'>P1,963</h3>
      
      <p class='text-gray-400'>include taxes and fees</p>
      </li>
      <li>
      <div class='flex gap-2  mt-1'>
              <img src="{{ asset('assets/images/breakfast91.png')}}" class='h-[20px] w-[20px]'/>
              <p>Breakfast included</p>
          </div>
          <div class='flex gap-2 mt-1'>
            <img src="{{ asset('assets/images/snow91.png')}}" class='h-[20px] w-[20px]' />
            <p>Airconditioned Rooms</p>
           </div>
          <div class='flex gap-2  mt-1'>
              <img src="{{ asset('assets/images/wifi91.png')}}" class='h-[20px] w-[20px]'/>
              <p>Free Wifi</p>
          </div>  
          <div class='flex gap-2 mt-1'>
            <img src="{{ asset('assets/images/pool91.png')}}" class='h-[20px] w-[20px]' />
            <p>Pool</p>
           </div>
          <div class='flex gap-2 mt-1'>
              <img src="{{ asset('assets/images/shower91.png')}}" class='h-[20px] w-[20px]'/>
              <p>Private Bathroom</p>
          </div>
          <div class='flex gap-2 mt-1'>
              <img src="{{ asset('assets/images/parking91.png')}}" class='h-[20px] w-[20px]'/>
              <p>Free Parking</p>
          </div>
  
      </li>
      <li>
  <div class="flex items-center justify-center">
      
      
  </div>
      </li>
      </ul>
      <div class="card-actions justify-end mt-5">
      <a href="/soeliana" type="button" class="text-white bg-gradient-to-r from-cyan-400 via-cyan-500 to-cyan-600 hover:bg-gradient-to-br focus:ring-4 
      focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 rounded-lg texext-sm px-5 py-3.5 text-center me-3 mb-3 font-semibold ">Check Rooms</a>      </div>
    </div>
  </div>
  
  <div class='col-span-3'>
  <div id='hotel6' class="card lg:card-side bg-base-100 shadow-xl my-2 mx-3">

    <figure class='px-2 py-2'>
      <div id='hotel1' class="carousel w-[300px]">
      <div id="slide1" class="carousel-item relative w-full">
        <img src="{{ asset('assets/images/punta1.png')}}" class="w-full h-[300px]" />
        <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
          
        </div>
      </div> 
     
      </figure>
    
    <div class="card-body">
      <ul class='flex justify-between items-center'>
      <li class='mr-4'><h2 class="card-title font-bold">Punta Punta </h2>
      <p class='text-gray-400'>7.5km from Magpupungko <br>Rock Pools</p>
      <h3 class='text-xl font-bold mt-10'>P5,943</h3>
     
      <p class='text-gray-400'>include taxes and fees</p>
      </li>
      <li>
      <div class='flex gap-2  mt-1'>
              <img src="{{ asset('assets/images/breakfast91.png')}}" class='h-[20px] w-[20px]'/>
              <p>Breakfast included</p>
          </div>
         
          <div class='flex gap-2  mt-1'>
              <img src="{{ asset('assets/images/wifi91.png')}}" class='h-[20px] w-[20px]'/>
              <p>Free Wifi</p>
          </div>
          <div class='flex gap-2 mt-1'>
            <img src="{{ asset('assets/images/pool91.png')}}" class='h-[20px] w-[20px]' />
            <p>Pool</p>
           </div>
          <div class='flex gap-2 mt-1'>
              <img src="{{ asset('assets/images/parking91.png')}}" class='h-[20px] w-[20px]'/>
              <p>Free Parking</p>
          </div>
  
           <div class='flex gap-2 mt-1'>
              <img src="{{ asset('assets/images/shower91.png')}}" class='h-[20px] w-[20px]'/>
              <p>Private Bathroom</p>
          </div>
  
  
      </li>
      <li>
 
      </li>
      </ul>
      <div class="card-actions justify-end mt-5">
      <a href="/punta" type="button" class="text-white bg-gradient-to-r from-cyan-400 via-cyan-500 to-cyan-600 hover:bg-gradient-to-br focus:ring-4 
      focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-semibold rounded-lg texext-sm px-5 py-3.5 text-center me-3 mb-3">Check Rooms</a      </div>
    </div>
  </div>
  
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
       
  
  
  </div>  

    <script src="js/jquery-1.11.3.min.js"></script>             <!-- jQuery (https://jquery.com/download/) -->
    <script src="js/popper.min.js"></script>                    <!-- https://popper.js.org/ -->       
    <script src="js/bootstrap.min.js"></script>                 <!-- https://getbootstrap.com/ -->
    <script src="js/datepicker.min.js"></script>                <!-- https://github.com/qodesmith/datepicker -->
    <script src="js/jquery.singlePageNav.min.js"></script>      <!-- Single Page Nav (https://github.com/ChrisWojcik/single-page-nav) -->
    <script src="slick/slick.min.js"></script>                  <!-- http://kenwheeler.github.io/slick/ -->
    <script>

      
            // Date Picker
            const pickerCheckIn = datepicker('#inputCheckIn');
            const pickerCheckOut = datepicker('#inputCheckOut');
            
          

    </script>             

</body>
</html>