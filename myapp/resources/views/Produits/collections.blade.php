<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Collections</title>
    <link rel="shortcut icon" href="{{asset('storage/img/logowhite.png')}}" type="image/x-icon">
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">

    @include('Layout.nav')

    <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 px-4 py-8">
        @foreach($produits as $produit)
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img class="w-full h-56 object-cover object-center" src="{{ asset('storage/' . $produit->image) }}" alt="Product image">
                <div class="p-4">
                    <h2 class="text-xl font-semibold text-gray-800">{{ $produit->name }}</h2>
                    <p class="text-gray-600 mt-2">{{ $produit->description }}</p>
                    <div class="mt-4 flex justify-between items-center">
                        <span class="text-gray-700 font-semibold">{{ $produit->price }}</span>
                        <button class="text-sm bg-gray-800 text-white px-4 py-2 rounded-lg hover:bg-gray-700 focus:outline-none focus:bg-gray-700">Details</button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

</body>
</html>
