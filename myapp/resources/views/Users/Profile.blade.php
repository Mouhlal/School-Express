<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{$profile->name}}</title>
  <link rel="shortcut icon" href="{{asset('storage/img/logowhite.png')}}" type="image/x-icon">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">
  @vite('resources/css/app.css')

</head>

<body class="font-sans antialiased text-gray-900 leading-normal tracking-wider bg-gray-100">

  @include('Layout.nav')


  <div class="max-w-4xl mx-auto mt-12 bg-white rounded-lg shadow-lg overflow-hidden">
    <div class="md:flex">
      <!-- Image -->
      <div class="md:w-1/2">
        <img class="w-full h-auto md:h-full object-cover object-center" src="{{asset('storage/'.$profile->image)}}" alt="">
      </div>
      <!-- Content -->
      <div class="md:w-1/2 px-6 py-8">
        <h1 class="text-3xl font-bold mb-4">{{$profile->name}}</h1>
        <div class="mb-6 border-b border-gray-300"></div>
        <p class="text-gray-700 mb-4"><svg class="h-4 fill-current text-green-700 mr-2 inline" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9 12H1v6a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-6h-8v2H9v-2zm0-1H0V5c0-1.1.9-2 2-2h4V2a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v1h4a2 2 0 0 1 2 2v6h-9V9H9v2zm3-8V2H8v1h4z"/></svg>{{$profile->email}}</p>
        <p class="text-gray-600 mb-4"><svg class="h-4 fill-current text-green-700 mr-2 inline" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 20a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm7.75-8a8.01 8.01 0 0 0 0-4h-3.82a28.81 28.81 0 0 1 0 4h3.82zm-.82 2h-3.22a14.44 14.44 0 0 1-.95 3.51A8.03 8.03 0 0 0 16.93 14zm-8.85-2h3.84a24.61 24.61 0 0 0 0-4H8.08a24.61 24.61 0 0 0 0 4zm.25 2c.41 2.4 1.13 4 1.67 4s1.26-1.6 1.67-4H8.33zm-6.08-2h3.82a28.81 28.81 0 0 1 0-4H2.25a8.01 8.01 0 0 0 0 4zm.82 2a8.03 8.03 0 0 0 4.17 3.51c-.42-.96-.74-2.16-.95-3.51H3.07zm13.86-8a8.03 8.03 0 0 0-4.17-3.51c.42.96.74 2.16.95 3.51h3.22zm-8.6 0h3.34c-.41-2.4-1.13-4-1.67-4S8.74 3.6 8.33 6zM3.07 6h3.22c.2-1.35.53-2.55.95-3.51A8.03 8.03 0 0 0 3.07 6z"/></svg> {{$profile->cin}}</p>
        <p class="text-gray-800 text-sm">{{$profile->description}}</p>

        <div class="mt-8">
            <a href="/">
                <button class="bg-green-700 hover:bg-green-900 text-white font-bold py-2 px-4 rounded-full">Back</button>
            </a>
        </div>
      </div>
    </div>
  </div>

</body>

</html>
