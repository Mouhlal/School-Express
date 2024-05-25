<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{asset('storage/img/logowhite.png')}}" type="image/x-icon">
    @vite('resources/css/app.css')

    <title>Collections</title>
</head>
<body>

    @include('Layout.nav')



    @foreach($produits as $produit)
    <div class="relative flex flex-col mt-6 m-48 top-28 text-gray-700 bg-white shadow-md bg-clip-border rounded-xl w-96">
        <div
          class="relative h-56 mx-4 -mt-6 overflow-hidden text-white shadow-lg bg-clip-border rounded-xl bg-blue-gray-500 shadow-blue-gray-500/40">
          <img
            src="{{ asset('storage/' . $produit->image) }}"
            alt="card-image" />
        </div>
        <div class="p-6">
          <h5 class="block mb-2 font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
            {{ $produit->name }}
          </h5>
          <p class="block font-sans text-base antialiased font-light leading-relaxed text-inherit">
           {{ $produit->description }}
          </p>
        </div>
        <div class="p-6 pt-0">
          <button
            class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg bg-gray-900 text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none"
            type="button">
            Read More
          </button>
        </div>
    </div>
    @endforeach
</body>
</html>
