<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
<div class="mt-[500px]">

  <div class="bg-[#01dada] lg:h-[185px] h-[643px]">
    
    <h1 class="lg:text-center lg:ml-0 ml-3 font-semibold text-3xl pt-7">PARTNERS</h1>
  <div class="lg:flex lg:ml-0  gap-12 sm:gap-3 mt-5">
      <img src="{{ asset('assets/images/partner1.png')}}" class="lg:w-[200px] lg:h-[80px] w-[90px] h-[90px] mx-12" />
      <img src="{{ asset('assets/images/partner2.png')}}" class="lg:w-[200px] lg:h-[80px] w-[90px] h-[90px] mx-12" />
      <img src="{{ asset('assets/images/partner3.png')}}" class="lg:w-[200px] lg:h-[80px] w-[90px] h-[90px] mx-12" />
      <img src="{{ asset('assets/images/partner4.png')}}" class="lg:w-[200px] lg:h-[80px] w-[90px] h-[90px] mx-12" />
      <img src="{{ asset('assets/images/partner5.png')}}" class="lg:w-[200px] lg:h-[80px] w-[90px] h-[90px] mx-12" />
      <img src="{{ asset('assets/images/partner6.png')}}" class="lg:w-[200px] lg:h-[80px] w-[90px] h-[90px] mx-12" />
  
      

  
    </div>
    <hr class="my-5" />
  <div class="pb-10 lg:ml-0 ml-2">
    <div class="grid lg:grid-cols-3 grid-cols-1 mb-12">
      <div class="grid-cols-1 lg:ml-40 lg:mt-10">
        <h1 class="text-xl font-semibold lg:my-0 my-3"><span class="font-bold text-2xl">&copy</span> La Bouy 2024</h1>
        <p class="text-gray-600">Follow us on our Social</p>
        <p class="text-gray-600 ml-7">Media Account</p>
        <div class="flex gap-4 mt-3">
          <img src="{{ asset('assets/images/twitter.svg')}}" class="lg:w-[40px] lg:h-[35px] w-[40px] h-[30px] " />
          <img src="{{ asset('assets/images/facebook.svg')}}" class="lg:w-[40px] lg:h-[35px] w-[40px] h-[30px] " />
          <img src="{{ asset('assets/images/instagram.svg')}}" class="lg:w-[40px] lg:h-[35px] w-[40px] h-[30px] " />
        </div>
        <p class="bg-[#01dada] lg:h-[4px] w-[160px] mt-2"></p>
      </div>
      <div class="grid-cols-1 lg:ml-40 lg:mt-10">
        <p class="text-xl font-semibold lg:my-0 my-3 lg:ml-0 ml-1 mt-8">Let's discuss your vacation together. </p>
        <div class="flex gap-3 mt-3 ">
          <div class="border-[#01dada] border-2 lg:h-[130px] lg:w-[130px] h-[90px] w-[90px] rounded-full  text-center  lg:ml-[80px]"><a href=""><p class="font-semibold lg:text-xl text-sm lg:mt-11 mt-8">Contact Us</p></a></div>
          
    
        
        </div>

      </div>
      <div class="grid-cols-1 lg:ml-40 lg:mt-10">
        <h1 class="text-xl font-semibold lg:my-0 my-3 mt-8">SUBSCRIBE NEWSLETTER</h1>
        <input type="text"  placeholder="Email" class="rounded-l-lg bg-gray-200 p-3"/>
        <button class="px-3 py-3  text-black font-bold bg-yellow-300 rounded-r-lg">SUBSCRIBE</button>
      </div>
      </div>
    </div>

</div>
</body>
</html>