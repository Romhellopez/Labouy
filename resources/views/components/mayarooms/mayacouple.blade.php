<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Labouy</title>

  
     
  @vite('resources/css/app.css')
</head>
<body>
  <div class='bg-gray-100'>
    <div class='md:max-w-[1480px] max-w-[600px]  m-auto w-full h-full flex justify-center items-center ' >
          <div class='flex mb-10 mt-12 mx-2'>

          <div class=' grid sm:grid-cols-1 grid-row-1 lg:grid-cols-3 gap-3'>
          <div class='col-span-1 '>
            
          <div class="carousel w-full h-[455px] my-2 ml-3 lg:ml-0">
<div id="slide1" class="carousel-item relative w-full">
<img src={room1} class='lg:rounded-tl-xl lg:rounded-bl-xl w-[480px]'/>
<div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
  <a href="#slide4" class="btn btn-outline btn-circle">❮</a> 
  <a href="#slide2" class="btn btn-outline btn-circle">❯</a>
</div>
</div> 
<div id="slide2" class="carousel-item relative w-full">
<img src={room2} class='lg:rounded-bl-xl w-[480px] lg:rounded-tl-xl ' />
<div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
  <a href="#slide1" class="btn btn-outline btn-circle">❮</a> 
  <a href="#slide3" class="btn btn-outline btn-circle">❯</a>
</div>
</div> 
<div id="slide3" class="carousel-item relative w-full">
<img src={room3} class='lg:rounded-bl-xl w-[480px] lg:rounded-tl-xl '/>
<div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
  <a href="#slide2" class="btn btn-outline btn-circle">❮</a> 
  <a href="#slide4" class="btn btn-outline btn-circle">❯</a>
</div>
</div> 
<div id="slide4" class="carousel-item relative w-full">
<img src={room4} class='lg:rounded-bl-xl w-[480px] lg:rounded-tl-xl ' />
<div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
  <a href="#slide3" class="btn btn-outline btn-circle">❮</a> 
  <a href="#slide1" class="btn btn-outline btn-circle">❯</a>
</div>
</div>
</div>
            
            
            
            </div>

            <div class='grid lg:grid-cols-3 lg:ml-0 lg:gap-0 col-span-2 grid-cols-1'>
              <div  >
            <img src={room5} class='w-[300px] h-[220px] my-2'/>
            </div>
            <div >
            <img src={room6} class='w-[300px] h-[220px] my-2'/>
            </div>
            <div>
            <img src={room7} class='w-[300px] h-[220px] my-2 lg:rounded-tr-xl'/>
            </div>
            <div>
            <img src={room8} class='w-[300px]  h-[220px] my-2' />
            </div>
            <div>
            <img src={room9} class='h-[220px] w-[300px] my-2'/>
            </div>
            <div>
            <img src={room11} class='w-[300px] h-[220px] my-2 lg:rounded-br-xl'/>
            </div>


            </div>


            </div>
            </div>
          </div>

          <div class='md:max-w-[1400px] max-w-[600px] font-semibold  m-auto w-full h-full p-3 rounded-xl mt-12'>
            <h1 class='text-3xl'>Deluxe Room, 1 Double Bed, Garden View</h1>
          </div>

          <div class='md:max-w-[1400px] max-w-[600px]   m-auto w-full h-full bg-yellow-300 p-3 rounded-xl mt-12' >
          <h1 class='text-2xl font-semibold'>Highlights</h1>
<div class=' mb-10 mt-12'>

  <div class=' gap-5  text-xl grid lg:grid-cols-7 grid-cols-2'>
    <p class='bg-yellow-100 p-3 rounded-lg text-center'>Balcony or patio</p>
    <p class='bg-yellow-100 p-3 rounded-lg text-center'>Air conditioning</p> 
    <p class='bg-yellow-100 p-3 rounded-lg text-center'>Flat-screen TV</p>
    <p class='bg-yellow-100 p-3 rounded-lg text-center'>Private bathroom</p>
    <p class='bg-yellow-100 p-3 rounded-lg text-center'>Living room</p>
    <p class='bg-yellow-100 p-3 rounded-lg '>Rainfall showerhead</p>
    <p class='bg-yellow-100 p-3 rounded-lg text-center'>Electric kettle</p>
  </div>

  </div>
  </div>
  <div class='md:max-w-[1400px] max-w-[600px] grid-row-2 grid grid-cols-3  m-auto w-full h-full bg-white p-3 rounded-xl mt-12' >
  <div class='col-span-1 mx-2'>
    <div class='lg:flex gap-3 my-5 '>
      <img src="{{ asset('assets/iconsroom/square.svg')}}" class='w-[30px] h-[30px]'/>
    <p class='text-lg font-semibold'>31 sq m</p>
    </div >
    <div class='lg:flex gap-3 my-5'>
      <img src="{{ asset('assets/iconsroom/family.svg')}}" class='w-[30px] h-[30px]'/>
    <p class='text-lg font-semibold'>Sleeps 3</p>
    </div>
    <div class='lg:flex gap-3 my-5'>
      <img src="{{ asset('assets/iconsroom/bed.svg')}}" class='w-[30px] h-[30px]' />
    <p class='text-lg font-semibold'>1 Double Bed</p>
    </div>
  </div>

  <div class='col-span-2'>
    <div class='border p-3 rounded-xl'>
      <h1 class='text-2xl font-semibold mb-2'>Room options</h1>
      <p class='text-lg text-gray-600'>Partially refundable</p>
      <p class='text-3xl font-semibold my-3'>P3,975</p>
      <h2 class='mb-1 text-lg'>Your price includes:</h2>
      <div class='flex gap-2'>
        <img src="{{ asset('assets/iconsroom/check.svg')}}" class='w-[20px] h-[20px]' />
      <p>Free Cancellation</p>
      </div>
      <div class='flex gap-2'>
      <img src="{{ asset('assets/iconsroom/tax.svg')}}" class='w-[20px] h-[20px]' />
      <p>Taxes and Fees</p>
      </div>

      <div class='flex justify-end'>
       <Link to='/checkout'><button class='bg-yellow-300 p-4 rounded-xl font-semibold'>BOOK NOW</button></Link>
      </div>
    </div>
  </div>
  </div>


          <div class='md:max-w-[1400px] max-w-[600px]  m-auto w-full h-full bg-white p-3 rounded-xl mt-12 mb-10' >
<div class=' mb-10 mt-12'>

<div class=' grid sm:grid-cols-1 lg:grid-cols-2 gap-5 ml-2'>
<h1 class='text-3xl mt-12 font-semibold flex justify-left col-span-2'>Room amenities</h1>
    <div class='col-span-1'>
  
    <div class='flex gap-3  mt-5'>
            <img src="{{ asset('assets/iconsroom/shower.svg')}}"  class='w-[30px] h-[30px]' />
            <div>
            <h1 class='text-xl font-semibold '>Bathroom</h1>
            <p class='text-gray-600 mt-2'>Free toiletries</p>
            <p class='text-gray-600'>Private bathroom</p>
            <p class='text-gray-600'>Rainfall showerhead</p>
            <p class='text-gray-600'>Shower</p>
            <p class='text-gray-600'>Towels</p>
            </div>
        </div>

        <div class='flex gap-3  mt-5'>
            <img src="{{ asset('assets/iconsroom/spoon.svg')}}"  class='w-[30px] h-[30px]' />
            <div>
            <h1 class='text-xl font-semibold '>Food and drink</h1>
            <p class='text-gray-600 mt-2'>Electric kettle</p>
            </div>
        </div>


    </div>

    <div class='col-span-1'>
        

        <div class='flex gap-3 mb-20 mt-5'>
            <img src="{{ asset('assets/iconsroom/bed.svg')}}" class='w-[30px] h-[30px]' />
            <div>
            <h1 class='text-xl font-semibold '>Bedroom</h1>
            <p class='text-gray-600 mt-2'>Air conditioning</p>
            <p class='text-gray-600'>Bed sheets</p>
            <p class='text-gray-600'>Rollaway/extra beds (surcharge)</p>
            </div>
        </div>

        
       

        
        <div class='flex gap-3 my-5 '>
            <img src="{{ asset('assets/iconsroom/frost.svg')}}" class='w-[30px] h-[30px]' />
            <div>
            <h1 class='text-xl font-semibold '>More</h1>
            <p class='text-gray-600 mt-2'>Housekeeping (on request)</p>
            <p class='text-gray-600'>Living room</p>
            <p class='text-gray-600'>View - garden</p>
            </div>
        </div>
        

    </div>

    

    </div>
    
</div>
</div>


</div>
</body>
</html>