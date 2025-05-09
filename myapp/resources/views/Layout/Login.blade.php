<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>
    <link rel="shortcut icon" href="{{asset('storage/img/logowhite.png')}}" type="image/x-icon">
    @vite('resources/css/app.css')
</head>
<style>
    .gradient {
        background: linear-gradient(90deg, #d53369 0%, #daae51 100%);
      }
</style>
<body>

    @include('Layout.nav')

    <div class="font-[sans-serif] text-[#333] bg-white flex items-center justify-center md:h-screen p-4">
        <div class="shadow-[0_2px_16px_-3px_rgba(6,81,237,0.3)] max-w-6xl rounded-md p-6">
          <a href="#"><img
            src="{{ asset('storage/img/mylogo.png') }}" alt="logo" class='w-40 md:mb-4 mb-12' />
          </a>
          <div class="grid md:grid-cols-2 items-center gap-8">
            <div class="max-md:order-1">
              <img src="{{ asset('storage/img/login.png') }}" class="lg:w-11/12 w-full object-cover rounded-lg" alt="login-image" />
            </div>
            <form  action="{{ route('Users.login') }}" method="POST" class="max-w-md w-full mx-auto">
                @csrf
                @foreach($errors->all() as $error)
                <div class="text-red-800 p-4 text-center">
                  <h2>{{ $error }}</h2>
                </div>
              @endforeach
              <div class="mb-12">
                <h3 class="text-4xl font-extrabold text-[#d53369]">Log in</h3>
              </div>
              <div>
                <div class="relative flex items-center">
                  <input  name="email" value="{{ old('email') }}"
                   type="email" required class="w-full text-sm border-b border-gray-300 focus:border-blue-600 px-2 py-3 outline-none" placeholder="Enter email" />
                  <svg xmlns="http://www.w3.org/2000/svg" fill="#bbb" stroke="#bbb" class="w-[18px] h-[18px] absolute right-2" viewBox="0 0 682.667 682.667">
                    <defs>
                      <clipPath id="a" clipPathUnits="userSpaceOnUse">
                        <path d="M0 512h512V0H0Z" data-original="#000000"></path>
                      </clipPath>
                    </defs>
                    <g clip-path="url(#a)" transform="matrix(1.33 0 0 -1.33 0 682.667)">
                      <path fill="none" stroke-miterlimit="10" stroke-width="40" d="M452 444H60c-22.091 0-40-17.909-40-40v-39.446l212.127-157.782c14.17-10.54 33.576-10.54 47.746 0L492 364.554V404c0 22.091-17.909 40-40 40Z" data-original="#000000"></path>
                      <path d="M472 274.9V107.999c0-11.027-8.972-20-20-20H60c-11.028 0-20 8.973-20 20V274.9L0 304.652V107.999c0-33.084 26.916-60 60-60h392c33.084 0 60 26.916 60 60v196.653Z" data-original="#000000"></path>
                    </g>
                  </svg>
                </div>
              </div>
              <div class="mt-8">
                <div class="relative flex items-center">
                  <input name="password" value="{{ old('password') }}" type="password"  required class="w-full text-sm border-b border-gray-300 focus:border-blue-600 px-2 py-3 outline-none" placeholder="Enter password" />
                  <svg xmlns="http://www.w3.org/2000/svg" fill="#bbb" stroke="#bbb" class="w-[18px] h-[18px] absolute right-2 cursor-pointer" viewBox="0 0 128 128">
                    <path d="M64 104C22.127 104 1.367 67.496.504 65.943a4 4 0 0 1 0-3.887C1.367 60.504 22.127 24 64 24s62.633 36.504 63.496 38.057a4 4 0 0 1 0 3.887C126.633 67.496 105.873 104 64 104zM8.707 63.994C13.465 71.205 32.146 96 64 96c31.955 0 50.553-24.775 55.293-31.994C114.535 56.795 95.854 32 64 32 32.045 32 13.447 56.775 8.707 63.994zM64 88c-13.234 0-24-10.766-24-24s10.766-24 24-24 24 10.766 24 24-10.766 24-24 24zm0-40c-8.822 0-16 7.178-16 16s7.178 16 16 16 16-7.178 16-16-7.178-16-16-16z" data-original="#000000"></path>
                  </svg>
                </div>
              </div>
              <div class="flex items-center justify-between gap-2 mt-6">
                <div class="flex items-center">
                  <input id="remember-me" required name="remember-me" type="checkbox" class="h-4 w-4 shrink-0 text-[#d53369] border-gray-300 rounded" />
                  <label for="remember-me" class="ml-3 block text-sm">
                    Remember me
                  </label>
                </div>
                <div>
                  <a href="jajvascript:void(0);" class="text-[#d53369] text-sm hover:underline">
                    Forgot Password?
                  </a>
                </div>
              </div>
              <div class="mt-12">
                <button type="submit" class="w-full shadow-xl py-2.5 px-4 text-sm font-semibold rounded-full text-white gradient focus:outline-none">
                  Login
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
</body>
</html>

