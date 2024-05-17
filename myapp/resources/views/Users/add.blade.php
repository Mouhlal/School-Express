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

  <div class="min-h-screen bg-gray-100 p-0 sm:p-12">
    <div class="mx-auto max-w-md px-6 py-12 bg-white border-0 shadow-lg sm:rounded-3xl">
      <h1 class="text-2xl font-bold mb-8">Ajoutation De Membre</h1>
      <form id="form" action={{route('Users.store')}} method="POST" enctype="multipart/form-data" >
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
            placeholder=" "
            class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200"
          />
          <label for="name" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Enter name</label>
 </div>

        <div class="relative z-0 w-full mb-5">
          <input
            type="email"
            name="email"
            value="{{old('email')}}"
            placeholder=" "
            class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200"
          />
          <label for="email" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Enter email address</label>
        </div>

        <div class="relative z-0 w-full mb-5">
          <input
            type="password"
            name="password"
            value="{{old('password')}}"
            placeholder=" "
            class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200"
          />
          <label for="password" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Enter password</label>
        </div>

        <div class="flex flex-row space-x-4">
          <div class="relative z-0 w-full mb-5">
            <input
              type="text"
              name="Date_Début_travail"
              placeholder=" "
              value="{{old('Date_Début_travail')}}"
              onclick="this.setAttribute('type', 'date');"
              class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200"
            />
            <label for="date" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Date Début Travail</label>
         </div>
          <div class="relative z-0 w-full">
            <input
              type="text"
              name="cin"
              value="{{old('cin')}}"
              placeholder=" "
              class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200"
            />
            <label for="time" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Cin</label>
         </div>
        </div>

        <div class="relative z-0 w-full mb-5">
          <input
            type="number"
            name="salaries"
            value="{{old('salaries')}}"
            placeholder=" "
            class="pt-3 pb-2 pl-5 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200"
          />
          <div class="absolute top-0 left-0 mt-3 ml-1 text-gray-400">$</div>
          <label for="money" class="absolute duration-300 top-3 left-5 -z-1 origin-0 text-gray-500">Salaire</label>
       </div>


        <button
          id="button"
          type="submit"
          class="w-full px-6 py-3 mt-3 text-lg text-white transition-all duration-150 ease-linear rounded-lg shadow outline-none bg-black hover:bg-gray-600 hover:shadow-lg focus:outline-none"
        >
            Enregistrer
    </button>
      </form>
    </div>
  </div>


</body>
</html>
