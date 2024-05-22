<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Ajoute</title>
</head>
<body>

<style>
    .-z-1 {
      z-index: -1;
    }

    .origin-0 {
      transform-origin: 0%;
    }

    input:focus ~ label,
    input:not(:placeholder-shown) ~ label,
    textarea:focus ~ label,
    textarea:not(:placeholder-shown) ~ label,
    select:focus ~ label,
    select:not([value='']):valid ~ label {
      /* @apply transform; scale-75; -translate-y-6; */
      --tw-translate-x: 0;
      --tw-translate-y: 0;
      --tw-rotate: 0;
      --tw-skew-x: 0;
      --tw-skew-y: 0;
      transform: translateX(var(--tw-translate-x)) translateY(var(--tw-translate-y)) rotate(var(--tw-rotate))
        skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
      --tw-scale-x: 0.75;
      --tw-scale-y: 0.75;
      --tw-translate-y: -1.5rem;
    }

    input:focus ~ label,
    select:focus ~ label {
      /* @apply text-black; left-0; */
      --tw-text-opacity: 1;
      color: rgba(0, 0, 0, var(--tw-text-opacity));
      left: 0px;
    }
  </style>

<div class="relative top-28">
      <div class="min-h-screen p-7 sm:p-12 ">
        <div class="mx-auto max-w-md px-6 py-12 bg-white border-0 shadow-lg sm:rounded-3xl">
          <h1 class="text-2xl font-bold mb-8">Ajoutation Des Produits</h1>
          <form id="form" action={{route('Produits.store')}} method="POST" enctype="multipart/form-data" >
            @csrf
            <div class="relative z-0 w-full mb-5">
                <input
                  type="file"
                  name="image"
                  value="{{old('image')}}"
                  placeholder=" "
                  class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200"
                />
                <label for="name" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Enter Image</label>
              </div>
            <div class="relative z-0 w-full mb-5">
              <input
                type="text"
                name="name"
                value="{{old('name')}}"
                placeholder=""
                class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200"
              />
              <label for="name" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Enter name</label>
       </div>
            <div class="relative z-0 w-full mb-5">
              <input
                type="text"
                name="description"
                value="{{old('description')}}"
                placeholder=" "
                class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200"
              />
              <label for="description" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Enter description</label>
            </div>
            <div class="relative z-0 w-full mb-5">
              <input
                type="number"
                name="prix"
                value="{{old('prix')}}"
                placeholder=" "
                class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200"
              />
              <label for="password" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Enter prix</label>
            </div>
            <div class="flex flex-row space-x-4">
              <div class="relative z-0 w-full mb-5">
                <input
                  type="number"
                  name="quantite"
                  placeholder=" "
                  value="{{old('quantite')}}"
                  class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200"
                />
                <label for="text" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Quantité</label>
             </div>
              <div class="relative z-99 w-full">
                <label for="categories_id" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Categories</label>
                <select
                name="categories_id">
                <option value="">---Select Categories---</option>
                @foreach($categories as $cat)
                <option value="{{$cat->id}}"> {{$cat->type}} </option>
                @endforeach

            </select>
             </div>
            </div>
            <button
              id="button"
              type="submit"
              class="w-full px-6 py-3 mt-3 text-lg text-white transition-all duration-150 ease-linear rounded-lg shadow outline-none bg-black hover:bg-gray-600 hover:shadow-lg focus:outline-none"
            >
                Ajouter
        </button>
          </form>
        </div>
      </div>
  </div>


</body>
</html>
