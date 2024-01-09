<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdn.jsdelivr.net/npm/daisyui@4.5.0/dist/full.min.css" rel="stylesheet" type="text/css" />
<script src="https://cdn.tailwindcss.com"></script>
</head>


<body>
    <div class="navbar bg-cyan-400 pointer">
        <div class="flex-1">
          <a class="btn btn-ghost text-xl ml-5"><img src="/pergola.jpg" class="h-[45px] w-[150px]"></a>

          <ul class="nav text-l font-bold justify-center flex flex-1 items-center text-center gap-3 mr-2"> 
            <li>
                <a href="/">Home</a>
            </li>
            <li>
                <a href="">About</a>
            </li>
            <li>
               <a href="">Contact Us</a>
            </li>
        </ul>
        </div>
        
          <div class="dropdown dropdown-end mr-5">
            <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
              <div class="w-10 rounded-full">
                <img alt="Tailwind CSS Navbar component" src="/romantic.webp" />
              </div>
            </div>
           
            <ul tabindex="0" class="mt-3 z-[1] p-2 shadow menu menu-sm dropdown-content bg-base-100 rounded-box w-52">
              <li><a>Change Profile</a></li>
              <li><a>Logout</a></li>
            </ul>
          </div>
        </div>
      </div>
</body>