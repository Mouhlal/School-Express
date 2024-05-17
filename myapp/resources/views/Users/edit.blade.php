<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    @vite('resources/css/app.css')
    <title>Edit</title>
</head>
<script src="./node_modules/preline/dist/preline.js"></script>

<body>
<div class="max-w-4xl px-4 py-10 p-11 sm:px-6 lg:px-8 mx-auto">
    <div class="bg-white rounded-xl shadow p-4 sm:p-7">
      <div class="mb-8">
        <h2 class="text-xl font-bold text-gray-800">
          User
        </h2>
        <p class="text-sm text-gray-600">
          Manage your name, password and account settings.
        </p>
      </div>

      <form action="{{route('Users.update' , $users->id)}}" enctype="multipart/form-data" method="POST">
        <!-- Grid -->
        @csrf
        <div class="grid sm:grid-cols-12 gap-2 sm:gap-6">
          <div class="sm:col-span-3">
            <label class="inline-block text-sm text-gray-800 mt-2.5">
              Employée photo
            </label>
          </div>
          <!-- End Col -->

          <div class="sm:col-span-9">
            <div class="flex items-center gap-5">
             <input type="file" name="image" value="{{$users->image}}" id="">
            </div>
          </div>

          <div class="sm:col-span-3">
            <label for="af-account-full-name" class="inline-block text-sm text-gray-800 mt-2.5">
              Full name
            </label>
            <div class="hs-tooltip inline-block">
              <button type="button" class="hs-tooltip-toggle ms-1">
                <svg class="inline-block size-3 text-gray-400" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                  <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                </svg>
              </button>
              <span class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible w-40 text-center z-10 py-1 px-2 bg-gray-900 text-xs font-medium text-white rounded shadow-sm" role="tooltip">
                Displayed on public forums, such as Preline
              </span>
            </div>
          </div>
          <!-- End Col -->

          <div class="sm:col-span-9">
            <div class="sm:flex">
              <input value="{{$users->name}}" name="name" type="text" class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
            </div>
          </div>
          <!-- End Col -->

          <div class="sm:col-span-3">
            <label for="af-account-email" class="inline-block text-sm text-gray-800 mt-2.5">
              Email
            </label>
          </div>
          <!-- End Col -->

          <div class="sm:col-span-9">
            <input id="af-account-email" value="{{$users->email}}" name="email" type="email" class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none" placeholder="maria@site.com">
          </div>
          <!-- End Col -->
{{--
          <div class="sm:col-span-3">
            <label for="af-account-password" class="inline-block text-sm text-gray-800 mt-2.5">
              Password
            </label>
          </div>
          <!-- End Col -->

          <div class="sm:col-span-9">
            <div class="space-y-2">
              <input id="af-account-password"  value="{{$users->password}}" type="password" class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none" placeholder="Enter current password">
            </div>
          </div> --}}
          <!-- End Col -->

          <div class="sm:col-span-3">
            <div class="inline-block">
              <label for="af-account-phone" class="inline-block text-sm text-gray-800 mt-2.5">
                Cin
              </label>
            </div>
          </div>
          <!-- End Col -->

          <div class="sm:col-span-9">
            <div class="sm:flex">
              <input id="af-account-phone" name="cin" value="{{$users->cin}}" type="text" class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
            </div>
          </div>
          <!-- End Col -->

          <div class="sm:col-span-3">
            <label for="af-account-gender-checkbox" class="inline-block text-sm text-gray-800 mt-2.5">
              Date Début Du Travail
            </label>
          </div>
          <!-- End Col -->

          <div class="sm:col-span-9 m-2">
            <div class="sm:flex">
                <input type="date" name="Date_Début_travail" value="{{$users->Date_Début_travail}}" class="shrink-0 mt-0.5 border-gray-300 rounded-full text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none" id="af-account-gender-checkbox" >
              </label>
            </div>
          </div>
          <!-- End Col -->

          <div class="sm:col-span-3">
            <label for="af-account-bio" class="inline-block text-sm text-gray-800 mt-2.5">
              Salaire
            </label>
          </div>
          <!-- End Col -->

          <div class="sm:col-span-9">
            <input type="number" name="salaries" value="{{$users->salaries}}" class="shrink-0 mt-0.5 border-gray-300 rounded-full text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none" id="af-account-gender-checkbox" >$

          </div>
          <!-- End Col -->
        </div>
        <!-- End Grid -->

        <div class="mt-5 flex justify-end gap-x-2">
          <a href="{{route('Users.index')}}">
              <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none">
                Cancel
              </button>
          </a>
          <button type="submit" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
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
