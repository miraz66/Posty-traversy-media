<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @vite('resources/css/app.css')
  <title>Posty-traversy-media</title>
</head>
<body class="bg-neutral-100">

   <nav class="p-6 bg-white flex justify-between mb-6">
      <ul class="flex items-center">
          <li>
              <a href="/" class="p-3">Home</a>
          </li>
          <li>
              <a href="" class="p-3">Dashboard</a>
          </li>
          <li>
              <a href="/post" class="p-3">Posts</a>
          </li>
      </ul>

      <ul class="flex items-center">
              <li>
                  <a href="" class="p-3"></a>
              </li>
              <li>
                  <form action="" method="post" class="p-3 inline">
                      <button type="submit">Logout</button>
                  </form>
              </li>
              <li>
                  <a href="" class="p-3">Login</a>
              </li>
              <li>
                  <a href="{{route('register')}}" class="p-3">Register</a>
              </li>
      </ul>
  </nav>
   {{-- VIEW OUTPUT --}}
   <main>
      {{ $slot }}
   </main>
</body>
</html>