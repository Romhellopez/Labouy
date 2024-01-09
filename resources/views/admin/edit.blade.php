<!DOCTYPE html>
<html>
    <head>
		<link href="https://cdn.jsdelivr.net/npm/daisyui@4.5.0/dist/full.min.css" rel="stylesheet" type="text/css" />
		<script src="https://cdn.tailwindcss.com"></script>
		@vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.3/dist/cdn.min.js"></script>
    </head>
	<x-messages/>
    <body>
		<div class="navbar bg-cyan-300">
			<div class="flex-1">
			  <a class="btn btn-ghost text-xl pl-[4rem]">La Bouy</a>
			</div>
			<div class="flex-none gap-2">
			
			  <div class="dropdown dropdown-end pr-[4rem]">
				<div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
				  <div class="w-10 rounded-full">
					<img alt="Tailwind CSS Navbar component" src="https://daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg" />
				  </div>
				</div>
				<ul tabindex="0" class="mt-3 z-[1] p-2 shadow menu menu-sm dropdown-content bg-base-100 rounded-box w-52">
				  <li>
					<a class="justify-between">
					  Change Profile Picture
					</a>
				  </li>
				  <li><a href="/logout" >Logout</a></li>
				</ul>
			  </div>
			</div>
		  </div>
          <div class="grid lg:grid-cols-4 md:grid-cols-1">

          
            <div class="drawer lg:drawer-open">
              <input id="my-drawer-2" type="checkbox" class="drawer-toggle" />
              <div class="drawer-content flex flex-col items-center justify-center">
                <!-- Page content here -->
                <label for="my-drawer-2" class="btn btn-accent btn-outline btn-circle drawer-button lg:hidden"> → </label>
              
              </div> 
              <div class="drawer-side bg-cyan-100 ">
                <label for="my-drawer-2" aria-label="close sidebar" class= "drawer-overlay"></label> 
                <ul class="menu p-4 lg:w-80 md:w-{20px} min-h-full bg-cyan-100 text-base-content">
                  <!-- Sidebar content here -->
                  <li class="items-center justify-center text-dark font-bold">Dashboard</li>
                  <li class="items-center justify-center active"><a href="/dashboard/admin">Admin</a></li>
                  <li class="items-center justify-center"><a href="/dashboard/hotel">Hotel</a></li>
                  <li class="items-center justify-center"><a href="/dashboard/income">Weekly/Monthly Income</a></li>
                </ul>
              
              </div>
          </div>
          <div class="col-span-2 gap-5">
              <div class="max-w-lg max-auto">
                      <a href="#">
                          <h1 class="text-l font-bold text-black justify-center text-center mt-5">
                             Edit Booking
                          </h1>
                      </a>     
              </div>
           

    <h1 class="text-black font-bold my-5">Edit <p>id ->{{$hotel->id}} </p></h1>
    <form action="/dashboard/admin/{{$hotel->id}}" method="POST"  class="flex flex-column">
      @method('PUT')
      @csrf
            <label for="user_id" name="user_id"   class="text-black font-semibold">user_id</label>
            <input type="number" name="user_id"  for="user_id" placeholder="user_id" class="mb-5" value={{$hotel->user_id}}>
            @error('user_id')
            <p class="text-red-500 text-xs p-1">
                {{$message}}
            </p>
        @enderror
            
            <label for="Hotel" name="Hotel">Hotel</label>
            <select class="dropdown dropdown" for="Hotel" name="Hotel" value={{$hotel->Hotel}} >
                <option value=""></option>
                <option value="101 Ocean Beach">101 Ocean Beach</option>
                <option value="Hillside">Hillside</option>
                <option value="Maya Villa">Maya Villa</option>
                <option value="Dahun Villa">Dahun Villa</option>
                <option value="Soelinna Resort">Soelinna Resort</option>
                <option value="Punta Punta Resort">Punta Punta Resort</option>
            </select>
            @error('Hotel')
            <p class="text-red-500 text-xs p-1">
                {{$message}}
            </p>
        @enderror

        <label for="Rooms" name="Rooms">Rooms</label>
        <select for="Rooms" name="Rooms" value={{$hotel->Rooms}}>
            <option value=""></option>
            <option value="Deluxe">Deluxe</option>
            <option value="Couple">Couple</option>
            <option value="Premium">Premium</option>
        </select>
        @error('Rooms')
        <p class="text-red-500 text-xs p-1">
            {{$message}}
        </p>
    @enderror

    <label for="Price" name="Price">Price</label>
            <select for="Price" name="Price" value={{$hotel->Price}}>
            <option value="">Price</option>
            <option value="3,375">3,375</option>
            <option value="6,967">6,967</option>
            <option value="14,754">14,754</option>    
            </select>
            @error('Price')
            <p class="text-red-500 text-xs p-1">
                {{$message}}
            </p>
        @enderror

            <label for="Availability" name="Availability">Availability</label>
            <select for="Availability" name="Availability" value={{$hotel->Availability}}>
                <option value="">Availability</option>
                <option value="Fully Booked">Fully Booked</option>
                <option value="Available">Available</option>
            </select>
            @error('Availability')
            <p class="text-red-500 text-xs p-1">
                {{$message}}
            </p>
        @enderror
            
            <label for="Reservation" name="Reservation">Reservation</label>
            <select for="Reservation" name="Reservation" value={{$hotel->Reservation}}>
                <option value="">Reservation</option>
                <option value="Approved">Approved</option>
                <option value="Change Schedule">Change Schedule</option>
                <option value="Cancelled">Cancelled</option>
                <option value="Pending">Pending</option>
            </select>
            @error('Reservation')
            <p class="text-red-500 text-xs p-1">
                {{$message}}
            </p>
        @enderror

        <label for="Payment" name="Payment">Payment</label>
            <select for="Payment" name="Payment" value={{$hotel->Payment}}>
                <option value="">Availability</option>
                <option value="Payment Success">Payment Success</option>
                <option value="Payment Cancelled">Payment Cancelled</option>
            </select>
            @error('Payment')
            <p class="text-red-500 text-xs p-1">
                {{$message}}
            </p>
        @enderror
            
            <button type="submit" class="btn btn-accent font-bold text-white my-2">update</button>
      
        
        </form>
    </div>
</div>



    

</body>
</html>

   {{-- <label for="id">id</label>
            <input for="id">id
            --}}

             {{-- <label for="action">action</label>
            <input for="action">action
 {{--  --}}