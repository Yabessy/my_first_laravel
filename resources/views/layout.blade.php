<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laragigs</title>
    @vite('resources/css/app.css')
</head>
<body>
    <nav class="flex justify-between items-center mb-4">
        <a href="/"><img class="w-24" src="{{asset('images/logo.png')}}" alt="" class="logo" /></a>
        <ul class="flex space-x-6 mr-6 text-lg">
          @auth
          <li>
            <span class="font-bold uppercase">
              Welcome {{auth()->user()->name}}
            </span>
          </li>
          <li>
            <a href="/listings/manage" class="hover:text-laravel"><i class="fa-solid fa-gear"></i> Manage Listings</a>
          </li>
          <li>
            <form class="inline" method="POST" action="/logout">
              @csrf
              <button type="submit">
                <i class="fa-solid fa-door-closed"></i> Logout
              </button>
            </form>
          </li>
          @else
          <li>
            <a href="/register" class="hover:text-laravel"><i class="fa-solid fa-user-plus"></i> Register</a>
          </li>
          <li>
            <a href="/login" class="hover:text-laravel"><i class="fa-solid fa-arrow-right-to-bracket"></i> Login</a>
          </li>
          @endauth
        </ul>
      </nav>
            {{-- View Output --}}
      <div class="mt-6 mb-40">
          @yield('content')
      </div>
      <footer
      class="bg-red-400 fixed bottom-0 left-0 w-full flex items-center justify-start font-bold bg-laravel text-white h-14 mt-24 md:justify-center">
      <p class="ml-2">Copyright &copy; 2022, All Rights reserved</p>
  
      <a href="/listings/create" class="absolute top-1/3 right-10 bg-black text-white py-2 px-5">Post Job</a>
    </footer>
</body>
</html>