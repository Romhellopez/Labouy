<!DOCTYPE html>
<html>
    <head>
		<link href="https://cdn.jsdelivr.net/npm/daisyui@4.5.0/dist/full.min.css" rel="stylesheet" type="text/css" />
		<script src="https://cdn.tailwindcss.com"></script>
		@vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.3/dist/cdn.min.js"></script>
    </head>
	<x-messages/>

	<form method="GET">
		@csrf
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
          
		  <div class="container-fluid">
		  <div class="grid lg:grid-cols-4 md:grid-cols-1">

          <div class="lg:col-span-1">
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
				<li class="items-center justify-center active"><a href="/dashboard/userData">User</a></li>
				<li class="items-center justify-center"><a href="/dashboard/hotel">Hotel</a></li>
				<li class="items-center justify-center"><a href="/dashboard/income">Weekly/Monthly Income</a></li>
			  </ul>
			
			</div>
		</div>
	</div>
		<div class="lg:col-span-3 md:col-span-4 gap-5 mr-10">
			<div class="max-w-lg max-auto">
					<a href="#">
						<h1 class="text-xl font-bold text-black text-center my-10">
							Users
						</h1>
					</a>     
			</div>
			
			<table class="w-full text-sm text-left text-gray-500">
				<thead class="text-xl text-gray-500 font-bold bg-cyan-200 ">
						{{-- <th scope="col" class="py-3 px-3">
							Id
						</th> --}}
						<th scope="col" class="py-3 px-3">
							id
						</th>
						<th scope="col" class="py-3 px-3">
							name
						</th>
						<th scope="col" class="py-3 px-3">
							usertype
						</th>
						<th scope="col" class="py-3 px-3">
							email
						</th>
						<th scope="col" class="py-3 px-3">
							actions
						 </th>
					{{--<th scope="col" class="py-3 px-3">
							Price
						</th>
						<th scope="col" class="py-3 px-3">
							Reservation
						</th>
						<th scope="col" class="py-3 px-3">
							Payment
						</th>  --}}
				</thead>

		
				{{-- @section('content') --}}
					<tbody>
						@foreach ($user as $users)
						<tr class=" border-b text-black">
							<td class="py-4 px-3">
								{{ $users->id }} 
							</td>
							<td class="py-4 px-3">
								{{ $users->name }} 
							</td>
							<td class="py-4 px-3">
								{{ $users->usertype }}
							</td>
							<td class="py-4 px-3">
								{{ $users->email }}
							</td>
							{{-- <td class="py-4 px-3">
								{{ $hotels->Rooms }}test
							</td>
							<td class="py-4 px-3">
								{{ $hotels->Price }}test
							</td>
							<td class="py-4 px-3">
								{{ $hotels->Availability }}test
							</td>
							<td class="py-4 px-3">
								{{ $hotels->Reservation }}test
							</td>
							<td class="py-4 px-3">
								{{ $hotels->Payment }}test
							</td> --}}
							<td class="py-4 px-3">
								{{-- <a  href="/dashboard/admin/{{$hotels->id}}"  class="btn btn-" type="submit" >Update</a> --}}
								{{-- <form method="DELETE">
									@method('POST')
									@csrf
								<button href="/dashboard/admin/{id}" class="btn btn-warning font-bold text-white my-2" type="submit">Delete</button>
							</form> --}}
							<div class="col-sm">
								{{-- <form action="/dashboard/hotel/{{$hotels->id}}" method="post"> --}}
									{{-- @csrf --}}
									{{-- @method('DELETE') --}}
									<button type="submit" class="btn btn-danger btn-sm">Delete</button>
								{{-- </form> --}}
							</div>
							
							</td>
						</tr>
						@endforeach
		
					</tbody>
					{{-- @endsection --}}
			</table>
			<a class="btn btn-lg btn-accent text-white font-bold px-10 py-2 mt-5" href="/userData/create">Add</a>
			<section class="mt-10">
				<div class="overflow-x-auto relative"></div>
		</section>
	</div>
</div>		
		</div>
	</div>
</form>



		

    </body>
</html>

{{-- /dashboard/admin/{{$hotel->users_id}} --}}