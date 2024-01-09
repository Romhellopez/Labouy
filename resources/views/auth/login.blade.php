<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
<x-messages/>
  <div class='md:max-w-1180px max-w-600px m-auto w-full h-full flex justify-center items-center border-2 rounded-xl mt-12 mb-12 bg-white'>
      
    <div class='grid lg:grid-cols-2 grid-cols-1 grid-rows-1 rounded-lg mt-5 mb-5'>
    

    <div class='col-span-1  ' >
  <div class='flex justify-center ' >
  
<img src="{{ asset('assets/images/loginlogo.png')}}" class="w-[645px] h-[608px]" alt="">
</div>
</div>

<div class='col-span-1 mt-12'> 

<h1 class="ml-12 text-2xl font-bold mb-5">Login</h1>

<div class='ml-12 '> 
    <form method="POST" action="/login/process">
        @csrf
<input placeholder='Email' type="text" name="email"  class="bg-[#D9D9D9] rounded-lg w-[313px] h-[62px] font-semibold text-lg p-2"/>
@error('email')
            <p class="text-red-500 text-xs p-1">
                {{$message}}
            </p>
        @enderror

</div>

<div class='ml-12 mt-5 '>
 
<input placeholder='Password' type="password" name="password"    class="bg-[#D9D9D9] rounded-lg w-[313px] h-[62px] font-semibold text-lg p-2"/>
</div>
<div class='my-2 font-semibold'>
  <p class="ml-[90px]">Don't have an account? <span class="text-[#01DADA]"><a href="/register">Register</a></span></p>

</div>

<div class="flex">
<p class="text-[#01DADA] ml-[140px] my-12 font-semibold ">Forgot Password?</p>
</div>
<div class='flex  mb-2 ml-12'>
<button class='p-3 bg-[#00FAFA] hover:bg-yellow-300 mt-3 rounded-lg font-semibold w-[313px] h-[62px] '  type="submit">Login</button>
</form>
</div>



</form>
</div>


</div>

</div>
  </h1>
</body>
</html>