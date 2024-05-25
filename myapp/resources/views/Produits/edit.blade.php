<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{asset('storage/img/logowhite.png')}}" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    @vite('resources/css/app.css')
    <title>Modifier les Produits</title>
</head>

<body>

    @include('Layout.nav')


<div class="max-w-4xl px-4 py-10 p-11 sm:px-6 lg:px-8 mx-auto">
    <div class="bg-white rounded-xl shadow p-4 sm:p-7">
      <div class="mb-8">
        <h2 class="text-xl font-bold text-gray-800">
          Edit Product
        </h2>
        <p class="text-sm text-gray-600">
          Update product details below.
        </p>
      </div>

      <form action="{{ route('Produits.update', $produits->id) }}" enctype="multipart/form-data" method="POST">
        @csrf
        @method('PUT')
        <!-- Grid -->
        <div class="grid sm:grid-cols-12 gap-2 sm:gap-6">
          <div class="sm:col-span-3">
            <label class="inline-block text-sm text-gray-800 mt-2.5">
              Product Photo
            </label>
          </div>
          <!-- End Col -->

          <div class="sm:col-span-9">
            <div class="flex items-center gap-5">
             <input type="file" name="image" class="form-control">
            </div>
          </div>
          <!-- End Col -->

          <div class="sm:col-span-3">
            <label for="name" class="inline-block text-sm text-gray-800 mt-2.5">
              Full Name
            </label>
          </div>
          <!-- End Col -->

          <div class="sm:col-span-9">
            <div class="sm:flex">
              <input value="{{ $produits->name }}" name="name" type="text" class="form-control py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500" id="name">
                @error('name')
                    {{$message}}
                @enderror
            </div>
          </div>
          <!-- End Col -->

          <div class="sm:col-span-3">
            <label for="description" class="inline-block text-sm text-gray-800 mt-2.5">
              Description
            </label>
          </div>
          <!-- End Col -->

          <div class="sm:col-span-9">
            <input value="{{ $produits->description }}" name="description" type="text" class="form-control py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500" placeholder="Product description">
            @error('description')
                {{$message}}
            @enderror
          </div>
          <!-- End Col -->

          <div class="sm:col-span-3">
            <label for="prix" class="inline-block text-sm text-gray-800 mt-2.5">
              Price
            </label>
          </div>
          <!-- End Col -->

          <div class="sm:col-span-9">
            <div class="sm:flex">
              <input name="prix" value="{{ $produits->prix }}" type="number" class="form-control py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500">
                @error('prix')
                    {{$message}}
                @enderror
            </div>
          </div>
          <!-- End Col -->

          <div class="sm:col-span-3">
            <label for="quantite" class="inline-block text-sm text-gray-800 mt-2.5">
              Quantity
            </label>
          </div>
          <!-- End Col -->

          <div class="sm:col-span-9">
            <div class="sm:flex">
              <input id="quantite" name="quantite" value="{{ $produits->quantite }}" type="number" class="form-control py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500">
              @error('quantite')
                {{$message}}
              @enderror
            </div>
          </div>
          <!-- End Col -->

          <div class="sm:col-span-3">
            <label for="categories_id" class="inline-block text-sm text-gray-800 mt-2.5">
              Categories
            </label>
          </div>
          <!-- End Col -->

          <div class="sm:col-span-9">
            <select name="categories_id"  class="form-control py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ $produits->categories_id == $category->id ? 'selected' : '' }}>
                        {{ $category->type }}
                    </option>
                @endforeach
            </select>
            @error('categories_id')
            {{$message}}
          @enderror
          </div>
          <!-- End Col -->
        </div>
        <!-- End Grid -->

        <div class="mt-5 flex justify-end gap-x-2">
          <a href="{{ route('Produits.index') }}">
              <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50">
                Cancel
              </button>
          </a>
          <button type="submit" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-[#d53369] text-white hover:bg-black">
            Save changes
          </button>
        </div>
      </form>
    </div>
    <!-- End Card -->
  </div>
  <!-- End Card Section -->
</body>
</html>
