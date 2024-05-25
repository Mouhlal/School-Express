<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{asset('storage/img/logowhite.png')}}" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    @vite('resources/css/app.css')
    <title>Ajoute Des Produits</title>
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
        --tw-text-opacity: 1;
        color: rgba(0, 0, 0, var(--tw-text-opacity));
        left: 0px;
    }
</style>

@include('Layout.nav')


<div class="relative top-18">
    <div class="min-h-screen p-7 sm:p-12">
        <div class="mx-auto max-w-md px-6 py-12 bg-white border-0 shadow-lg sm:rounded-3xl">
            <h1 class="text-2xl font-bold mb-8">Ajoutation Des Produits</h1>
            <form  method="POST" action={{route('Produits.store')}} enctype="multipart/form-data">
                @csrf
                <div class="relative z-0 w-full mb-5">
                    <input
                        type="file"
                        name="image"
                        value="{{ old('image') }}"
                        placeholder=" "
                        class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200"
                    />
                    <label for="image" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Enter Image</label>
                    @error('image')
                    {{$message}}
                    @enderror
                </div>
                <div class="relative z-0 w-full mb-5">
                    <input
                        type="text"
                        name="name"
                        value="{{ old('name') }}"
                        placeholder=" "
                        class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200"
                    />
                    <label for="name" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Enter name</label>
                    @error('name')
                        {{$message}}
                    @enderror
                </div>
                <div class="relative z-0 w-full mb-5">
                    <input
                        type="text"
                        name="description"
                        value="{{ old('description') }}"
                        placeholder=" "
                        class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200"
                    />
                    <label for="description" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Enter description</label>
                    @error('description')
                    {{$message}}
                @enderror
                </div>
                <div class="relative z-0 w-full mb-5">
                    <input
                        type="number"
                        name="prix"
                        value="{{ old('prix') }}"
                        placeholder=" "
                        class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200"
                    />
                    <label for="prix" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Enter prix</label>
                    @error('prix')
                    {{$message}}
                @enderror
                </div>
                <div class="flex flex-row space-x-4">
                    <div class="relative z-0 w-full mb-5">
                        <input
                            type="number"
                            name="quantite"
                            value="{{ old('quantite') }}"
                            placeholder=" "
                            class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200"
                        />
                        <label for="quantite" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Quantité</label>
                        @error('quantite')
                        {{$message}}
                    @enderror
                    </div>
                    <div class="relative z-99 w-full mb-5">
                        <label for="categories_id" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Categories</label>
                        <select name="categories_id" class="block w-full px-0 mt-2 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200">
                            <option value=""> Select Categories <option>
                            @foreach($categories as $cat)
                                <option value="{{ $cat->id }}">{{ $cat->type }}</option>
                            @endforeach
                        </select>
                        @error('categories_id')
                        {{$message}}
                    @enderror
                    </div>
                </div>
                <button
                    type="submit"
                    class="w-full px-6 py-3 mt-3 text-lg text-white transition-all duration-150 ease-linear rounded-lg shadow outline-none bg-[#d53369] hover:bg-black hover:shadow-lg focus:outline-none"
                >
                    Ajouter
                </button>
            </form>
        </div>
    </div>
</div>

</body>
</html>
