

<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
  <div class='md:max-w-1180px max-w-600px m-auto w-full h-full flex justify-center items-center border-2 rounded-xl mt-12 mb-12 bg-white'>
      
    <div class='grid lg:grid-cols-2 grid-cols-1 grid-rows-1 rounded-lg mt-5 mb-5'>
    

    <div class='col-span-1  ' >
  <div class='flex justify-center ' >
  
<img src="{{ asset('assets/images/loginlogo.png')}}" class="w-[645px] h-[608px]" alt="">
</div>
</div>

<div class='col-span-1 mt-12'> 

<h1 class="lg:ml-12 ml-6 text-2xl font-bold mb-5">Signup</h1>

<div class='lg:ml-12 ml-6 mt-5'> 

<input placeholder='Username' type="text" name="Full Name"  class="bg-[#D9D9D9] rounded-lg w-[313px] h-[62px] font-semibold text-lg p-2"/>

</div>

<div class='lg:ml-12 ml-6 mt-5'> 

  <input placeholder='Email' type="text" name="username"  class="bg-[#D9D9D9] rounded-lg w-[313px] h-[62px] font-semibold text-lg p-2"/>
  
  </div>

<div class='lg:ml-12 ml-6 mt-5 '>
 
<input placeholder='Password' type="password" name="password"    class="bg-[#D9D9D9] rounded-lg w-[313px] h-[62px] font-semibold text-lg p-2"/>
</div>
<div class='lg:ml-12 ml-6 mt-5 '>
 
  <input placeholder='Confirm Password' type="password" name="password"    class="bg-[#D9D9D9] rounded-lg w-[313px] h-[62px] font-semibold text-lg p-2"/>
  </div>
<div class='my-2 font-semibold'>
  <p class="lg:ml-[90px] ml-[70px]">By signing up you agree to our </p>
  <span class="text-[#01DADA] lg:ml-[75px] ml-[55px]">Terms of Service</span> and <span class="text-[#01DADA]">Privacy Policy.</span>
</div>

<div class="mt-12">
<p class="lg:ml-[90px] ml-[70px]">Already have an account? <span class="text-[#01DADA] font-semibold ">Login</span></p>
</div>
<div class='flex  mb-2 lg:ml-12 ml-6'>
<button class='p-3 bg-[#00FAFA] hover:bg-yellow-300 mt-3 rounded-lg font-semibold w-[313px] h-[62px] '  type="submit">Sign-Up</button>
</div>



</form>
</div>


</div>

</div>
  </h1>
</body>
</html>